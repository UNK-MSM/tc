<?php

namespace App\Http\Controllers\Auth;

use Mail;

use Validator;

use App\User;
use App\ActualUser;
use App\Membership;
use App\MembershipPlanInstance;
use App\ActualStockMarket;
use App\MembershipPlanInstanceDetail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/portal/my_stocks';
    protected $redirectAfterLogout = '/index';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'max:145|required', 
            'username' => 'email|unique:users|required', 
            'password' => 'min:6|confirmed|required', 
            'mobile_no' => 'min:8',
            'privacy' => 'accept_terms',
            // 'membership_plan' => 'plan_settings',
            'source' => 'source_settings'
            /*'country_serial_no' => ['type' => 'list'],*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();

        $referral_link = $this->getToken();

        if (isset($data['referral']) && $data['referral'] != '') {
            $referral_user = ActualUser::where('referral_link', $data['referral'])->first();
            $referral_user_serial_no = $referral_user->serial_no;
        }

        $user = ActualUser::create([
            'full_name' => $data['full_name'],
            'username' => $data['username'],
            'user_type_serial_no' => 3,
            'user_status_serial_no' => 1,
            'referral_link' => $referral_link,
            'email' => $data['username'],
            'mobile_no' => $data['mobile_no'],
            'password' => bcrypt($data['password']),
            'country_serial_no' => $data['country_serial_no'],
        ]);

        $activation_token = $this->getToken();

        $membership = Membership::create([
            'serial_no' => $user->serial_no, 
            'user_serial_no' => $user->serial_no, 
            'membership_type_serial_no' => 1,
            'activation_token' => $activation_token,
            'by_referral_member_serial_no' => isset($referral_user_serial_no) ? $referral_user_serial_no : NULL,
            'source' => $data['source'],
            'status' => 1
            ]);

        // if ($data['membership_plan'] === 'stockMarketPlan')
        // {
            $membership_plan = MembershipPlanInstance::create([
                'membership_plan_serial_no' => 3,
                'demo' => 1,
                'monthly_fees' => 0,
                'monthly_fees_6_months' => 0,
                'monthly_fees_12_months' => 0,
                'monthly_fees_24_months' => 0,
                'membership_serial_no' => $user->serial_no,
                'status' => 2,
                'period_in_days' => 14
            ]);
            foreach(ActualStockMarket::where('active', true)->get() as $market)
            {
                MembershipPlanInstanceDetail::create([
                    'membership_plan_instance_serial_no' => $membership_plan->serial_no,
                    // 'stock_market_serial_no' => $data['selected_stock_market'],
                    'stock_market_serial_no' => $market->serial_no,
                    'item_actual_price' => 0,
                    'optional_discount_rate' => 0,
                    'date_added' => DB::raw('NOW()')
                ]);
            }
        // } else {
        //     $membership_plan = MembershipPlanInstance::create([
        //         'membership_plan_serial_no' => 4,
        //         'demo' => 1,
        //         'monthly_fees' => 0,
        //         'monthly_fees_6_months' => 0,
        //         'monthly_fees_12_months' => 0,
        //         'monthly_fees_24_months' => 0,
        //         'membership_serial_no' => $user->serial_no,
        //         'status' => 7,
        //         'period_in_days' => 7
        //     ]);
        // }

        DB::commit();

        $username = $data['username'];
        $password = $data['password'];

        Mail::send('emails.new_account_ar', ['username' => $username, 'password' => $password, 'token' => $activation_token], function ($message) use ($username)
        {

            $message->from('trendcastsystem@gmail.com', 'TrendCast');

            $message->to($username);

            $message->subject('تفاصيل اشتراكك لدى TrendCast');

        });

        return User::where('serial_no', $user->serial_no)->get()[0];
    }

    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }
}
