<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Redirector;
use Carbon\Carbon;

use App\Membership;

use App\MembershipPlanInstance;

class ProtectedController extends Controller
{

    public function __construct(Request $request, Redirector $redirect)
	{

	    $this->middleware('auth');

	    $user = Auth::user();

	    if ($user == null) {
	    	$redirect->to('/signup/stockMarketPlan')->send();

	    	return;
	    } 

	    if ($user->user_type_serial_no == 3) {
	    	$membership = Membership::select('serial_no', 'status')
	    							->where('user_serial_no', $user->serial_no)
                                    ->first();

            if ($membership->status == 1) {
				$membership_plan_instance = MembershipPlanInstance::select('serial_no', 'membership_plan_serial_no', 'status')
				            ->where('membership_serial_no', $membership->serial_no)
				            ->where('demo', 1)
				            ->first();

				if ($membership_plan_instance->membership_plan_serial_no == 4 && $membership_plan_instance->status == 7) {
            		$redirect->to('/account_setup_pending')->send();
				} else {
	    			$redirect->to('/activation_pending')->send();
				}    
            } else if ($membership->status == 2) {
				$maxExpireDate = $membership->plans()->max('expire_date');
            	if(!empty($maxExpireDate)){
					$maxExpireDate = Carbon::parse($maxExpireDate);
					$diffInDays = Carbon::now()->diffInDays($maxExpireDate);
					if($diffInDays < 0) {
						$errorMessage = 'يرجى تجديد الاشتراك لتتمكن من الاستفادة من الخدمات المتاحة';
						$request->session()->put('error_message', $errorMessage);
					}else if($diffInDays <= 3){
						$days = 'ثلاثة أيام';
						if($diffInDays === 2){
							$days = 'يومان';
						}else if($diffInDays === 1){
							$days = 'يوم';
						}else if($diffInDays === 0){
							$days = 'اليوم';
						}
						$warningMessage = '<b>تنبيه:</b> اشتراكك ينتهي خلال '.$days;
						$request->session()->put('warning_message', $warningMessage);
					}

				}
            } else if ($membership->status == 3) {
            	$redirect->to('/account_setup_pending')->send();
            }
	    }

        DB::statement('SET @logged_user = ' . ($user->user_type_serial_no == 1 ? -1 : $user->serial_no) . ';');
	}

}
