<?php

namespace App\Http\Controllers;

use Mail;
use Auth;
use File;
use Validator;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

use App\User;
use App\ActualStock;
use App\ActualStockMarket;
use App\Country;
use App\Membership;
use App\MembershipPlanInstance;
use App\MembershipPlanInstanceDetail;
use App\ActualMembershipNotification;

class FrontEndController extends Controller
{

    public function index()
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();

        return view('frontend/home', ['plan' => 'stockMarketPlan', 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => '']);
    }

    public function css_content()
    {
        $css = File::get(public_path('css/font-awesome.min.css'));
        $css .= File::get(public_path('css/bootstrap.min.css'));
        $css .= File::get(public_path('css/hover-dropdown-menu.ar.css'));
        $css .= File::get(public_path('css/icons.css'));
        $css .= File::get(public_path('css/revolution-slider.css'));
        $css .= File::get(public_path('rs-plugin/css/settings.css'));
        $css .= File::get(public_path('css/animate.min.css'));
        $css .= File::get(public_path('css/owl/owl.carousel.css'));
        $css .= File::get(public_path('css/owl/owl.theme.css'));
        $css .= File::get(public_path('css/style.css'));
        $css .= File::get(public_path('css/responsive.css'));
        $css .= File::get(public_path('css/color.css'));
        $css .= File::get(public_path('css/trendcast-ar.css'));
        $css .= File::get(public_path('css/fonts/flaticon.css'));

        $response = Response::make($css, 200);
        $response->header('Content-Type', 'text/css');
        
        return $response;
    }

    public function indexFragment($fragmentId)
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();

        return view('frontend/home', ['fragmentId' => $fragmentId, 'plan' => 'stockMarketPlan', 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => '']);
    }

    public function first_landing_page()
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();

        return view('landing/page1', ['plan' => 'stockMarketPlan', 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => '']);
    }


    public function second_landing_page()
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();

        return view('landing/page2', ['plan' => 'stockMarketPlan', 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => '']);
    }

    public function activation_pending()
    {
        return view('frontend/activation_pending');
    }

    public function account_setup_pending()
    {
        return view('frontend/account_setup_pending');
    }

    public function password_reset_success()
    {
        return view('frontend/password_reset_success');
    }

    public function policy()
    {
        return view('frontend/policy');
    }

    public function privacy()
    {
        return view('frontend/privacy');
    }

    public function terms()
    {
        return view('frontend/terms');
    }

    public function signup(Request $request, $plan)
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();


        $user = Auth::user();

        if ($user == null) {
            $referral = $request->input('rid');

            return view('auth/login', array('plan' => $plan, 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => $referral));
        }


        return redirect()->route('my_account');

    }

    public function register_stocks()
    {

        $user = Auth::user();

        if ($user == null) {

            return redirect()->route('signup', 'customPlan');
        }

        $membership = Membership::select('serial_no', 'status')
                                ->where('user_serial_no', $user->serial_no)
                                ->first();

        if ($membership->status == 1) {
            $membership_plan_instance = MembershipPlanInstance::select('serial_no', 'membership_plan_serial_no', 'status')
                        ->where('membership_serial_no', $membership->serial_no)
                        ->where('demo', 1)
                        ->first();

            if ($membership_plan_instance->membership_plan_serial_no == 4 && $membership_plan_instance->status == 7) {
                $stocks = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_market_serial_no', 'custom_membership_price', 'logo')->where('active', 1)->get();

                $stockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

                return view('frontend/register_stocks', ['stocks' => $stocks, 'markets' => $stockMarkets, 'trial' => false]);
            } else {
                return redirect()->route('activation_pending');
            }    
        } else if ($membership->status == 3) {
            $stocks = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_market_serial_no', 'custom_membership_price', 'logo')->where('active', 1)->get();

            $stockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

            return view('frontend/register_stocks', ['stocks' => $stocks, 'markets' => $stockMarkets, 'trial' => false]);
        }   
    }

    public function register_stocks_noprotection()
    {
        $stocks = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_market_serial_no', 'custom_membership_price', 'logo')->where('active', 1)->get();

        $stockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

        return view('frontend/register_stocks', ['stocks' => $stocks, 'markets' => $stockMarkets, 'trial' => false]); 
    }

    public function registration_calculator()
    {
        return redirect()->route('signup', ['plan' => 'stockMarketPlan']);
        $stocks = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_market_serial_no', 'custom_membership_price', 'logo')->where('active', 1)->get();

        $stockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

        return view('frontend/register_stocks', ['stocks' => $stocks, 'markets' => $stockMarkets, 'trial' => true, 'showPackages' => true]); 
    }

    public function contact_us_form()
    {
        $stockMarkets = ActualStockMarket::where('active', 1)->get();
        $countries = Country::all();

        return view('frontend/home', ['fragmentId' => 'faq', 'plan' => 'stockMarketPlan', 'stockMarkets' => $stockMarkets, 'countries' => $countries, 'referral' => '']);
    }

    public function guide()
    {

        /*Mail::send('emails.new_account_ar', ['username' => 'mk', 'password' => 'mk', 'token' => 'mkss'], function ($message) use 
        {

            $message->from('noreply@trend-cast.com', 'TrendCast');

            $message->to('m.elkhoudary@gmail.com');

            $message->subject('تفاصيل اشتراكك لدى TrendCast');

        });

        return '';*/
        return view('frontend/guide'); 
    }

    public function do_contact_us(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email_address' => 'required|email',
            'previous_member' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('index')
                        ->withErrors($validator)
                        ->withInput();
        }

        $full_name = $request->input('full_name');
        $email_address = $request->input('email_address');
        $previous_member = $request->input('previous_member');
        $subject = $request->input('subject');
        $body = $request->input('body');

        Mail::send('emails.support_ticket_ar', ['full_name' => $full_name, 'email_address' => $email_address, 'previous_member' => $previous_member, 'subject' => $subject, 'body' => $body], function ($message) use ($full_name)
        {

            $message->from('trendcastsystem@gmail.com', 'TrendCast');

            $message->to('trendcast@protonmail.com');

            $message->subject('طلب دعم فني من ' . $full_name);

        });
    }

    public function do_register_stocks(Request $request) {
        $user = Auth::user();

        if ($user == null) {

            return redirect()->route('signup', 'customPlan');
        }

        $selected_stocks = $request->input('selected_stocks');

        if (empty($selected_stocks)) {
            return redirect()->route('register_stocks');
        }
        
        $membership = Membership::select('serial_no', 'membership_activated')
                                ->where('user_serial_no', $user->serial_no)
                                ->first();

        $membership_plan_instance = MembershipPlanInstance::select('serial_no', 'membership_plan_serial_no')
            ->where('membership_serial_no', $membership->serial_no)
            ->where('demo', 1)
            ->where('status', 7)
            ->first();

        foreach ($selected_stocks as $key => $value) {
            $stock = ActualStock::select('stock_market_serial_no')->where('active', 1)->where('serial_no', $value)->first();

            MembershipPlanInstanceDetail::create([
                'membership_plan_instance_serial_no' => $membership_plan_instance->serial_no,
                'stock_serial_no' => $value,
                'stock_market_serial_no' => $stock->stock_market_serial_no,
                'item_actual_price' => 0,
                'optional_discount_rate' => 0,
                'date_added' => DB::raw('NOW()')
            ]);
        }

        if ($membership->membership_activated == 1) {
            $membership->status = 2;
            $membership->save();

            MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                    ->where('demo', 1)
                    ->update([
                            'date_added' => DB::raw('NOW()'),
                            'start_date' => DB::raw('NOW()'),
                            'status' => 3,
                            'expire_date' => DB::raw('DATE_ADD(NOW(), INTERVAL period_in_days DAY)')]);

            return view('frontend/account_activated');
        } else {
            MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                    ->where('demo', 1)
                    ->update(['status' => 2]);

            return view('frontend/activation_pending');
        }
    }

    public function activate_account(Request $request) {
        $activation_token = $request->input('token');

        $membership = Membership::where('status', 1)
               ->where('activation_token', $activation_token)
               ->first();

        if ($membership == null) {
            return view('frontend/invalid_token');
        }

        $membership_plan_instance = MembershipPlanInstance::select('membership_plan_serial_no', 'status')
            ->where('membership_serial_no', $membership->serial_no)
            ->where('demo', 1)
            ->first();

        if ($membership_plan_instance->membership_plan_serial_no == 4)
        {
            if ($membership_plan_instance->status == 2) {
                $membership->status = 2;
                $membership->membership_activated = 1;
                $membership->save();

                /*User::where('serial_no', $membership->user_serial_no)->update(['points_balance' => DB::raw('points_balance + 10')]);

                $notification = new ActualMembershipNotification;
                $notification->type_serial_no = 6;
                $notification->body_ar = 'حصلت على 10 نقاط - تسجيل جديد';
                $notification->body_en = 'You have Earned 10 Points - New Membership';
                $notification->user_serial_no = $membership->user_serial_no;

                $notification->save();*/

                MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                    ->where('demo', 1)
                    ->update([
                        'date_added' => DB::raw('NOW()'),
                        'start_date' => DB::raw('NOW()'),
                        'status' => 3,
                        'expire_date' => DB::raw('DATE_ADD(NOW(), INTERVAL period_in_days DAY)')]);

                return view('frontend/account_activated');
            } else {
                $membership->status = 3;
                $membership->membership_activated = 1;

                $membership->save();

                /*User::where('serial_no', $membership->user_serial_no)->update(['points_balance' => DB::raw('points_balance + 10')]);

                $notification = new ActualMembershipNotification;
                $notification->type_serial_no = 6;
                $notification->body_ar = 'حصلت على 10 نقاط - تسجيل جديد';
                $notification->body_en = 'You have Earned 10 Points - New Membership';
                $notification->user_serial_no = $membership->user_serial_no;

                $notification->save();*/

                MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                    ->where('demo', 1)
                    ->update(['status' => 7]);

                return redirect()->route('register_stocks');
            }
        } else {
            $membership->status = 2;
            $membership->membership_activated = 1;

            $membership->save();

            /*User::where('serial_no', $membership->user_serial_no)->update(['points_balance' => DB::raw('points_balance + 10')]);

            $notification = new ActualMembershipNotification;
            $notification->type_serial_no = 6;
            $notification->body_ar = 'حصلت على 10 نقاط - تسجيل جديد';
            $notification->body_en = 'You have Earned 10 Points - New Membership';
            $notification->user_serial_no = $membership->user_serial_no;

            $notification->save();*/

            MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                ->where('demo', 1)
                ->update([
                        'date_added' => DB::raw('NOW()'),
                        'start_date' => DB::raw('NOW()'),
                        'status' => 3,
                        'expire_date' => DB::raw('DATE_ADD(NOW(), INTERVAL period_in_days DAY)')]);

            return view('frontend/account_activated');
        }

        //$user = Auth::user();

        //if ($user->status == 1) {
           // return redirect()->route('my_account');
        //}

        //return $activation_token;
    }
}
