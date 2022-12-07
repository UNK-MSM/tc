<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Start;
use Start_Charge;

use Validator;

use DB;

use App\Http\Requests;

use App\Stock;
use App\StockMarket;
use App\ActualStockMarket;
use App\ActualStock;
use App\News;
use App\StockUrgentCalculation;
use App\MembershipNotification;
use App\MembershipInstance;
use App\ActualMembershipNotification;
use App\Membership;
use App\MembershipPlanInstance;
use App\MembershipPlanInstanceDetail;
use App\MembershipPlan;
use App\DiscountCode;
use App\ActualDiscountCode;
use App\ActualDiscountCodeUsage;
use App\User;

class PortalController extends ProtectedController
{
    public function index()
    {
        $user = Auth::user();

        if ($user->status == 1) {
            return redirect()->route('activation_pending');
        }

    	$stocks = Stock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_price_decimal_places', 'stock_market_serial_no', 'closest_selling_price', 'last_day_open_selling_price', 'current_prediction', 'last_day_open_selling_price', 'open_selling_price', 'logo', 'final_result_text', 'previous_result_text')->where('active', 1)->orderBy('stock_name_ar', 'asc')->get();

    	$stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->where('active', 1)->get();

    	$allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
    								->take(3)
					                ->orderBy('added_date', 'desc')
					                ->get();

        return view('portal/main', ['stocks' => $stocks, 'markets' => $stockMarkets, 'all_news' => $allNews, 'active_page' => 'main']);
    }

    public function help()
    {
        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->where('active', 1)->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        return view('portal/help', ['markets' => $stockMarkets, 'all_news' => $allNews, 'active_page' => 'help']);
    }

    public function my_stocks()
    {
        $user = Auth::user();

        if ($user->status == 1) {
            return redirect()->route('activation_pending');
        }

    	$stocks = Stock::select('serial_no', 
    						 'stock_name_en', 
    						 'stock_name_ar', 
                             'stock_symbol',
                             'logo',
                             'date_closed',
                             'previous_date_closed',
    						 'stock_market_serial_no',
    						 'open_selling_price',
                             'stock_price_decimal_places',
                             'last_day_open_selling_price',
    						 'closest_selling_price',
    						 'predicted_rising_selling_closing_price',
    						 'predicted_rising_selling_closing_price_rate',
    						 'predicted_stable_selling_closing_price',
    						 'predicted_stable_selling_closing_price_rate',
    						 'predicted_falling_selling_closing_price',
    						 'predicted_falling_selling_closing_price_rate', 
                             'final_result_text', 
                             'previous_result_text')->where('active', 1)->orderBy('stock_name_ar', 'asc')->get();

    	$stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->where('active', 1)->orderBy('market_order')->get();

    	$allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
    								->take(3)
					                ->orderBy('added_date', 'desc')
					                ->get();

        return view('portal/my_stocks', [
                                            'stocks' => $stocks, 
                                            'markets' => $stockMarkets, 
                                            'all_news' => $allNews,     
                                            'videoLink' => 'https://www.youtube.com/embed/PR95-tBBze4',
                                            'active_page' => 'my_stocks']);
    }

    public function video_library()
    {
        $user = Auth::user();

        if ($user->status == 1) {
            return redirect()->route('activation_pending');
        }

        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->where('active', 1)->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        return view('portal/video_library', [
                                            'markets' => $stockMarkets, 
                                            'all_news' => $allNews,   
                                            'active_page' => 'video_library']);
    }

    public function contact_us()
    {
        $user = Auth::user();

        if ($user->status == 1) {
            return redirect()->route('activation_pending');
        }

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->where('active', 1)->get();

        return view('portal/contact_us', ['all_news' => $allNews, 'markets' => $stockMarkets, 'active_page' => 'contact_us']);
    }

    public function my_account()
    {
        return $this->my_account_with_error('');
    }

    public function my_account_with_error($errorCode)
    {
        $user = Auth::user();
        
        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        $allNotifications = MembershipNotification::all();

        $activePlans = MembershipInstance::where('status', 3)->where('expire_date', '>', DB::raw('NOW()'))->whereNull('renewed_plan_instance_serial_no')->get();

        $expiredPlans = MembershipInstance::where('status', 3)->where('expire_date', '<=', DB::raw('NOW()'))->whereNull('renewed_plan_instance_serial_no')->get();

        return view('portal/my_account_main', ['markets' => $stockMarkets, 'all_news' => $allNews, 'active_page' => 'my_account', 'notifications' => $allNotifications, 'activePlans' => $activePlans, 'expiredPlans' => $expiredPlans, 'errorMessage' => $errorCode]);
    }

    public function memberships_archive()
    {
        
        $user = Auth::user();
        
        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        $allNotifications = MembershipNotification::all();

        $plans = MembershipInstance::orderBy('start_date', 'desc')->get();

        return view('portal/memberships_archive', ['markets' => $stockMarkets, 'all_news' => $allNews, 'active_page' => 'memberships_archive', 'notifications' => $allNotifications, 'plans' => $plans]);
    }

    public function new_membership()
    {
        abort(403);
        
        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->get();

        $allStockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

        $allStocks = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_market_serial_no', 'custom_membership_price', 'logo', 'purchased')->where('active', 1)->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        return view('portal/new_membership', ['markets' => $stockMarkets, 'all_markets' => $allStockMarkets, 'stocks' => $allStocks, 'all_news' => $allNews, 'active_page' => 'new_membership']);
    }

    public function check_discount_code($code)
    {
        
        $discountCode = DiscountCode::select('code', 'amount', 'discount_description_ar', 'discount_description_en', 'rate_or_fixed')->where('code', $code)->get();

        return response()->json($discountCode, 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function new_membership_market()
    {
        
        $stockMarkets = StockMarket::select('serial_no', 'label_en', 'label_ar')->get();

        $allStockMarkets = ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'market_price', 'logo')->where('active', 1)->get();

        $allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
                                    ->take(3)
                                    ->orderBy('added_date', 'desc')
                                    ->get();

        $stockPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 3)->first();
        $basicPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 3)->first();
        $silverPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 4)->first();
        $goldenPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 5)->first();
        
        return view('portal/new_membership_market', [
            'markets' => $stockMarkets,
            'all_markets' => $allStockMarkets,
            'all_news' => $allNews,
            'active_page' => 'new_membership_market',
            'plan' => $stockPlan,
            'basicPlan' => $basicPlan,
            'silverPlan' => $silverPlan,
            'goldenPlan' => $goldenPlan,
        ]);
    }

    private function estimate_plan_price($membership_type, $selected_stocks, $selected_plan) {
        $planPrice = 0;
        $actualPlanPrice = 0;
        $totalPayment = 0;
        $discountValue = 0;

        if ($membership_type == 'customStocks') {
            $markets = array();
            $marketsIndex = array();

            $price = 0;

            foreach ($selected_stocks as $key => $value) {
                $stock = ActualStock::select('stock_market_serial_no', 'custom_membership_price')->where('active', 1)->where('serial_no', $value)->first();

                if (!isset($marketsIndex[$stock->stock_market_serial_no])) {
                    $marketsIndex[$stock->stock_market_serial_no] = true;
                    $markets[] = $stock->stock_market_serial_no;
                }

                $price = $stock->custom_membership_price;

                $planPrice += $stock->custom_membership_price;
            }

            if (count($selected_stocks) > 5) {
                $planPrice = $planPrice -  ((count($selected_stocks) - 5) * $price * 0.5);
            }

            $markets_in_calculation = ActualStockMarket::select('market_price')->whereIn('serial_no', $markets)->get();

            foreach ($markets_in_calculation as $key => $value) {
                $planPrice += $value->market_price;
            }

            $totalPayment = round($planPrice * $selected_plan);
            $discountValue = 0;

            if ($selected_plan == 1) {
                $actualPlanPrice = round($planPrice);
            } else if ($selected_plan == 3) {
                $discountValue = round($planPrice * 0.25 * 3);
                $actualPlanPrice = round($planPrice * 0.75 * 3);
            } else if ($selected_plan == 6) {
                $discountValue = round($planPrice * 0.35 * 6);
                $actualPlanPrice = round($planPrice * 0.65 * 6);
            } else if ($selected_plan == 12) {
                $discountValue = round($planPrice * 0.45 * 12);
                $actualPlanPrice = round($planPrice * 0.55 * 12);
            } else {
                dd('invalid plan ' . $selected_plan);
            }
        } else {
            $stockPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 3)->first();
    
            $totalPayment = $stockPlan->monthly_fees * $selected_plan;
            $discountValue = 0;

            if ($selected_plan == 1) {
                $actualPlanPrice = $stockPlan->monthly_fees;
            } else if ($selected_plan == 3) {
                $discountValue = round($totalPayment - ($stockPlan->monthly_fees_3_months));
                $actualPlanPrice = $stockPlan->monthly_fees_3_months;
            } else if ($selected_plan == 6) {
                $discountValue = round($totalPayment - ($stockPlan->monthly_fees_6_months));
                $actualPlanPrice = $stockPlan->monthly_fees_6_months;
            } else if ($selected_plan == 12) {
                $discountValue = round($totalPayment - ($stockPlan->monthly_fees_12_months));
                $actualPlanPrice = $stockPlan->monthly_fees_12_months;
            } else {
                dd('invalid plan ' . $selected_plan);
            }
        }

        return [
            'planPrice' => $planPrice,
            'actualPlanPrice' => $actualPlanPrice,
            'totalPayment' => $totalPayment,
            'discountValue' => $discountValue
        ];
    }

    public function complete_stock_registration(Request $request)
    {
        $user = Auth::user();
        
        $selected_stocks = $request->input('selected_stocks');
        $selected_market = $request->input('selected_market');
        $selected_plan = $request->input('selected_plan');
        $membership_type = $request->input('membershipType');
        $renewal = $request->input('renewal') == 'true';
        $oldPlan = $request->input('oldPlan');
        $appliedDiscountCode =  $request->input('appliedDiscountCode');
        $appliedPoints =  $request->input('appliedPoints');
        
        $oldPlanRemainingDays = 0;

        $membership = Membership::select('serial_no', 'user_serial_no', 'membership_activated', 'by_referral_member_serial_no', 'referral_got_rewarded')
                                ->where('user_serial_no', $user->serial_no)
                                ->first();

        if ($renewal) {
            $oldMembershipInstance = MembershipPlanInstance::where('serial_no', $oldPlan)->where('membership_serial_no', $membership->serial_no)->first();

            $expireDate = new \DateTime($oldMembershipInstance->expire_date);
            $today = new \DateTime();

            $interval = $today->diff($expireDate);
            
            if ($interval->invert == 0 && $interval->days > 0) {
                $oldPlanRemainingDays = $interval->days;
            }

            /*
            * Must Load Plan Details Here Not Get them From Client
            */
        }

        $estimates = $this->estimate_plan_price($membership_type, $selected_stocks, $selected_plan);

        $planPrice = $estimates['planPrice'];
        $actualPlanPrice = $estimates['actualPlanPrice'];
        $totalPayment = $estimates['totalPayment'];
        $discountValue = $estimates['discountValue'];

        if (isset($appliedDiscountCode)) {
            $discountCode = DiscountCode::select('code', 'amount', 'rate_or_fixed')->where('code', $appliedDiscountCode)->first();

            if ($discountCode == null) {
                dd('Invalid Discount Code');
            }

            $codeDiscount = ($discountCode->rate_or_fixed == 0 ? ($actualPlanPrice * $discountCode->amount / 100) : $discountCode->amount);

            $discountValue += $codeDiscount;

            $actualPlanPrice -= $codeDiscount;
            $actualPlanPrice = round($actualPlanPrice < 0 ? 0 : $actualPlanPrice, 0);

            $affected = ActualDiscountCode::where('code', $appliedDiscountCode)
                    ->where('redemption_times', '<', DB::raw('max_redemption_times'))
                    ->update(['redemption_times' => DB::raw('redemption_times + 1')]);

            if ($affected  == 0) {
                dd('Code Usages Exceeded');
            }
        }

        if (isset($appliedPoints)) {
            $points = $user->points_balance;

            $pointsDiscount = round($points / 10);

            $difference = $actualPlanPrice - $pointsDiscount;

            if ($difference < 0) {
                $pointsDiscount = $actualPlanPrice;
                $points -= abs($difference) * 10;
            }

            $discountValue += $pointsDiscount;

            $actualPlanPrice -= $pointsDiscount;

            User::where('serial_no', $user->serial_no)->update(['points_balance' => DB::raw('points_balance - ' . $points)]);

            $actualPlanPrice = round($actualPlanPrice < 0 ? 0 : $actualPlanPrice, 0);
        }

        if ($actualPlanPrice > 0) {
            // $api_keys = array(
            //     "secret_key" => "live_sec_k_23bd85ce1a19f9def60b0",
            //     "open_key"   => "live_open_k_0f8211db79175cae461a"
            // );

            // Start::setApiKey($api_keys["secret_key"]);

            $token = $request->input('startToken');
            $email = $request->input('startEmail');

            $payment_succeeded = false;
            $charge_status = '';
            $charge_id = '';
            $error_code = '';
            $error_message = '';

            try {
                if(empty($token)||empty($email)){
                    // throw new \ErrorException('Invalid token and email');
                }
                if(isset($appliedDiscountCode)){
                    if($appliedDiscountCode == 'DC50' && count($selected_market) != 2){
                        throw new \ErrorException('Invalid discount value');
                    }
                    if($appliedDiscountCode == 'DC60' && count($selected_market) < 3){
                        throw new \ErrorException('Invalid discount value.');
                    }
                }
                // $charge = Start_Charge::create(array(
                //     "amount"      => $actualPlanPrice * 100,
                //     "currency"    => 'USD',
                //     "card"        => $token,
                //     "email"       => $email,
                //     "ip"          => $_SERVER["REMOTE_ADDR"],
                //     "description" => "Stock Subscription" . ($renewal ? ' Renewal' : '')
                // ));

                $payment_succeeded = true;
                $charge_status = 'captured';
                $charge_id = $token;
                // $charge_status = $charge["state"];
                // $charge_id = $charge["id"];
            // } catch (\Start_Error $e) {
            } catch (\Exception $e) {
                // $error_code = $e->getErrorCode();
                $error_message = $e->getMessage();

                $payment_succeeded = false;
                $charge_status = '';
                $charge_id = '';
                // $error_code = $error_code;
                $error_message = $error_message;


                if (isset($appliedDiscountCode)) {
                    ActualDiscountCode::where('code', $appliedDiscountCode)
                            ->where('redemption_times', '<', DB::raw('max_redemption_times'))
                            ->update(['redemption_times' => DB::raw('redemption_times - 1')]);
                }

                if (isset($points) && $points > 0) {
                    User::where('serial_no', $user->serial_no)->update(['points_balance' => DB::raw('points_balance + ' . $points)]);
                }
            }
        } else {
            $payment_succeeded = true;
        }

        if ($payment_succeeded) {
            if ($membership_type == 'customStocks') {
                $membership_plan_instance = MembershipPlanInstance::create([
                    'membership_plan_serial_no' => 4,
                    'demo' => 0,
                    'total_price' => $totalPayment,
                    'discount' => $discountValue,
                    'consumed_points' => isset($points) ? $points : 0,
                    'plan_price' => $actualPlanPrice,
                    'payment_reference' => isset($charge_id) ? $charge_id : null,
                    'monthly_fees' => $planPrice,
                    'monthly_fees_3_months' => round($planPrice * 0.65 * 3, 1),
                    'monthly_fees_6_months' => round($planPrice * 0.55 * 6, 1),
                    'monthly_fees_12_months' => round($planPrice * 0.35 * 12, 1),
                    'membership_serial_no' => $membership->serial_no,
                    'status' => ((isset($charge_status) ? $charge_status : 'captured') == 'captured' ? 3 : 1),
                    'period_in_days' => $oldPlanRemainingDays + ($selected_plan * 30)
                ]);

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
            } else {
                $stockPlan = MembershipPlan::select('monthly_fees', 'monthly_fees_3_months', 'monthly_fees_6_months', 'monthly_fees_12_months')->where('serial_no', 3)->first();
    
                $membership_plan_instance = MembershipPlanInstance::create([
                    'membership_plan_serial_no' => 3,
                    'demo' => 0,
                    'total_price' => $totalPayment,
                    'discount' => $discountValue,
                    'consumed_points' => isset($points) ? $points : 0,
                    'plan_price' => $actualPlanPrice,
                    'payment_reference' => isset($charge_id) ? $charge_id : null,
                    'monthly_fees' => $stockPlan->monthly_fees,
                    'monthly_fees_6_months' => $stockPlan->monthly_fees_3_months,
                    'monthly_fees_12_months' => $stockPlan->monthly_fees_6_months,
                    'monthly_fees_24_months' => $stockPlan->monthly_fees_12_months,
                    'membership_serial_no' => $membership->serial_no,
                    'status' => ((isset($charge_status) ? $charge_status : 'captured') == 'captured' ? 3 : 1),
                    'period_in_days' => $oldPlanRemainingDays + ($selected_plan * 30)
                ]);

                foreach($selected_market as $idx => $market){
                    MembershipPlanInstanceDetail::create([
                        'membership_plan_instance_serial_no' => $membership_plan_instance->serial_no,
                        'stock_market_serial_no' => $market,
                        'item_actual_price' => 0,
                        'optional_discount_rate' => 0,
                        'date_added' => DB::raw('NOW()')
                    ]);
                }
            }

            if (isset($appliedDiscountCode)) {
                ActualDiscountCodeUsage::create([
                    'code' => $appliedDiscountCode,
                    'membership_serial_no' => $membership->serial_no,
                    'date_used' => DB::raw('NOW()'),
                    'membership_plan_instance_serial_no' => $membership_plan_instance->serial_no,
                    'amount_discounted' => $codeDiscount
                ]);

                $notification = new ActualMembershipNotification;
                $notification->type_serial_no = 8;
                $notification->body_ar = 'لقد قمت باستخدام كود خصم';
                $notification->body_en = 'You have Used a Discount Code';
                $notification->user_serial_no = $membership->user_serial_no;

                $notification->save();
            }

            if (isset($points) && $points > 0) {
                $notification = new ActualMembershipNotification;
                $notification->type_serial_no = 1;
                $notification->body_ar = 'تم استهلاك ' . $points . ' نقطة في اشتراك';
                $notification->body_en = $points . 'points were consumed in membership';
                $notification->param_1 = $points;
	            $notification->param_2 = -1;
                $notification->user_serial_no = $user->serial_no;

                $notification->save();
            }

            if ($renewal) {
                $oldMembershipInstance->renewed_plan_instance_serial_no =  $membership_plan_instance->serial_no;

                if ($oldPlanRemainingDays > 0) {
                    $oldMembershipInstance->expire_date = DB::raw('NOW()');
                }

                $oldMembershipInstance->save();
            }

            if ((isset($charge_status) ? $charge_status : 'captured') == 'captured') {
                MembershipPlanInstance::where('membership_serial_no', $membership->serial_no)
                        ->where('serial_no', $membership_plan_instance->serial_no)
                        ->update([
                                'date_added' => DB::raw('NOW()'),
                                'start_date' => DB::raw('NOW()'),
                                'status' => 3,
                                'expire_date' => DB::raw('DATE_ADD(NOW(), INTERVAL period_in_days DAY)')]);
            }

            $notification = new ActualMembershipNotification;
            $notification->type_serial_no = 7;
            $notification->body_ar = 'تم تفعيل الخطة الجديدة';
            $notification->body_en = 'New Membership Plan is Activated';
            $notification->user_serial_no = $user->serial_no;

            $notification->save();

            if ($renewal) {
                if ($actualPlanPrice > 0) {
                    User::where('serial_no', $user->serial_no)->update(['points_balance' => DB::raw('points_balance + ' . $actualPlanPrice)]);

                    $notification = new ActualMembershipNotification;
                    $notification->type_serial_no = 6;
                    $notification->body_ar = 'حصلت على ' . $actualPlanPrice . ' نقطة - تجديد تسجيل اشتراك';
                    $notification->body_en = 'You have Earned ' . $actualPlanPrice . ' Points - New Paid Membership';
	                $notification->param_1 = $actualPlanPrice;
	                $notification->param_2 = 1;
                    $notification->user_serial_no = $membership->user_serial_no;

                    $notification->save();
                }
            } else {
                if ($actualPlanPrice > 0) {
                    User::where('serial_no', $user->serial_no)->update(['points_balance' => DB::raw('points_balance + ' . $actualPlanPrice)]);

                    $notification = new ActualMembershipNotification;
                    $notification->type_serial_no = 6;
                    $notification->body_ar = 'حصلت على ' . $actualPlanPrice . ' نقطة - تسجيل اشتراك مدفوع';
                    $notification->body_en = 'You have Earned ' .  $actualPlanPrice . ' Points - New Paid Membership';
	                $notification->param_1 = $actualPlanPrice;
	                $notification->param_2 = 1;
                    $notification->user_serial_no = $membership->user_serial_no;

                    $notification->save();
                }
            }

            if ($membership->by_referral_member_serial_no != null && $membership->referral_got_rewarded == 0) {
                if ($actualPlanPrice > 0) {
                    User::where('serial_no', $membership->by_referral_member_serial_no)->update(['points_balance' => DB::raw('points_balance + ' . $actualPlanPrice)]);

                    $notification = new ActualMembershipNotification;
                    $notification->type_serial_no = 6;
                    $notification->body_ar = 'حصلت على ' .  $actualPlanPrice . ' نقاط - تسجيل مشترك بواسطتك';
                    $notification->body_en = 'You have Earned ' . $actualPlanPrice . ' Points - New Referred Membership';
                    $notification->param_1 = $actualPlanPrice;
                    $notification->param_2 = 1;
                    $notification->user_serial_no = $membership->by_referral_member_serial_no;

                    $notification->save();
                }

                $membership->referral_got_rewarded = $membership_plan_instance->serial_no;
                $membership->save();
            }

            return redirect()->route('my_account');
        } else {
            return $this->my_account_with_error('خلل في بطاقة الدفع المستخدمة، يرجى مراجعى الدعم الفني');
            //dd(array($error_code, $error_message));
        }
    }

    public function get_plan_renewal_prices(Request $request, $plan_instance_serial_no) {
        $detailed = $request->input('detailed', false);

        $user = Auth::user();

        $membership = Membership::select('serial_no', 'membership_activated')
                                ->where('user_serial_no', $user->serial_no)
                                ->first();

        $plan = MembershipPlanInstance::where('serial_no', $plan_instance_serial_no)->where('membership_serial_no', $membership->serial_no)->first();
        $planDetails = $plan->details;

        $selected_stocks = [];
        $plan_stocks = [];
        $membership_type = '';
        
        if ($plan->membership_plan_serial_no == 3) {

            if ($detailed) {
                // $selected_market = ActualStockMarket::where('serial_no', $planDetails[0]->stock_market_serial_no)->first();
                $selected_market = $plan->markets;
            } else {
                // $selected_market = $planDetails[0]->stock_market_serial_no;
                $selected_market = $planDetails->pluck('stock_market_serial_no');
            }
            
            $membership_type = 'stockPlan';
        } else {
            foreach ($planDetails as $key => $value) {
                $stock = ActualStock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'logo')->where('serial_no', $value->stock_serial_no)->first();

                if (!isset($plan_stocks[$value->stock_market_serial_no])) {
                    $plan_stocks[$value->stock_market_serial_no] = array('market' => ActualStockMarket::select('serial_no', 'label_en', 'label_ar', 'logo')->where('serial_no', $value->stock_market_serial_no)->first(), 'stocks' => array());
                }

                $selected_stocks[] = $value->stock_serial_no;
                $plan_stocks[$value->stock_market_serial_no]['stocks'][] = $stock;
            }

            $membership_type = 'customStocks';
        }

        $estimate = $this->estimate_plan_price($membership_type, $selected_stocks, 1);

        if ($detailed && $membership_type == 'customStocks') {
            $selected_stocks = $plan_stocks;
        }

        return response()->json(
            array(
                'oldPlanSerialNo' => $plan_instance_serial_no,
                'actualPlanPrice' => $estimate['actualPlanPrice'], 
                'membership_type' => $membership_type, 
                'selected_stocks' => $selected_stocks,
                'selected_market' => isset($selected_market) ? $selected_market : null
            ),
            200,
            array('Content-Type' => 'application/json; charset=UTF-8'),
            JSON_UNESCAPED_UNICODE
        );
    }

    public function view_charge_details(Request $request)
    {
        $api_keys = array(
            "secret_key" => "live_sec_k_23bd85ce1a19f9def60b0",
            "open_key"   => "live_open_k_0f8211db79175cae461a"
        );

        Start::setApiKey($api_keys["secret_key"]);

        try {
            $charge = Start_Charge::get('ch_0159f71ccac43f9a09b08235a9294');

            dd($charge);

        } catch (Start_Error $e) {
            $error_code = $e->getErrorCode();
            $error_message = $e->getMessage();

            /* depending on $error_code we can show different messages */
            if ($error_code === "card_declined") {
                echo "<h1>Charge was declined</h1>";
            } else {
                echo "<h1>Charge was not processed</h1>";
            }
            echo "<p>".$error_message."</p>";
        }
    }

    public function stock($stock_serial_no)
    {
        $user = Auth::user();

        if ($user->status == 1) {
            return redirect()->route('activation_pending');
        }

    	$stock = Stock::select('serial_no', 
    						 'stock_name_en', 
    						 'stock_name_ar', 
                             'logo',
    						 'stock_market_serial_no',
    						 'open_selling_price',
    						 'closest_selling_price',
 							 'stock_price_decimal_places', 
 							 'stock_market_serial_no', 
 							 'closest_selling_price', 
 							 'last_day_open_selling_price', 
 							 'current_prediction', 
 							 'last_day_open_selling_price', 
 							 'open_selling_price',
    						 'predicted_rising_selling_closing_price',
    						 'predicted_rising_selling_closing_price_rate',
    						 'predicted_stable_selling_closing_price',
    						 'predicted_stable_selling_closing_price_rate',
    						 'predicted_falling_selling_closing_price',
    						 'predicted_falling_selling_closing_price_rate',
                             'final_result_text', 
                             'previous_result_text')
    					->where('serial_no', $stock_serial_no)
                        ->where('active', 1)
    					->first();
                        
    	$allNews = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no')
    								/*->where('related_stock_serial_no', $stock_serial_no)*/
    								->take(3)
					                ->orderBy('added_date', 'desc')
					                ->get();

        $stockUrgentCauses = StockUrgentCalculation::select('serial_no', 'positive_effect', 'label_ar', 'label_en', 'description_en', 'description_ar')
                                    ->where('stock_serial_no', $stock_serial_no)
                                    ->get();

        return view('portal/stock_details', ['stock' => $stock, 'all_news' => $allNews, 'urgent_causes' => $stockUrgentCauses, 'active_page' => 'stock', 'hide_stocks_selector' => true, 'videoLink' => 'https://www.youtube.com/embed/kEgklq9GMaE',]);
    }

    public function change_password(Request $request) {

        $this->middleware('auth');

        $user = Auth::user();

       $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'confirmed|required'
        ]);

       if ($validator->fails()) {
            return response()->json(array('success' => false, 'errors' => $validator->errors()), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
        }

        if (!Auth::validate(array('email' => Auth::user()->email, 'password' => $validator->getData()['old_password']))) {
            return response()->json(array('success' => false, 'errors' => array('old_password' => 'الكلمة غير صحيحة')), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
        }

        $user = Auth::user();             
        $user->password = bcrypt($validator->getData()['password']);

        if ($user->save()) {
            $notification = new ActualMembershipNotification;
            $notification->type_serial_no = 4;
            $notification->body_ar = 'تم تغيير كلمة مرور الحساب';
            $notification->body_en = 'Account password was changed';
            $notification->user_serial_no = $user->serial_no;

            $notification->save();

            return response()->json(array('success' => true));
        }

        return response()->json(array('success' => false, 'errors' => array('password' => 'خلل غير متوقع')), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }
}
