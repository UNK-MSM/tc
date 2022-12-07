@extends('portal.layouts.my_account')

@section('title', 'حسابي')

@section('account_contents')
    <script>
    // Initialize Start on page load
    // StartCheckout.config({
    //   key: "<?php echo $apiKeys['open_key']; ?>",
    //   complete: function(params) {
    //     submitPlanRenewalForm(params);
    //   }
    // });
    </script>

    <div class="row">
     <div class="col-md-7">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">أرشيف الاشتراكات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th style="font-family: 'Droid Arabic Kufi', serif !important;"> نوع الاشتراك </th>
                                    <th style="font-family: 'Droid Arabic Kufi', serif !important;"> التكلفة </th>
                                    <th style="font-family: 'Droid Arabic Kufi', serif !important;"> تاريخ البدء </th>
                                    <th style="font-family: 'Droid Arabic Kufi', serif !important;"> تاريخ الانتهاء </th>
                                    <th style="font-family: 'Droid Arabic Kufi', serif !important;"> خيارات </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                <tr>
                                    <td> <a href="javascript:;" class="primary-link">{{ $plan->label_ar }}</a> </td>
                                    <td> {{ $plan->demo == 1 ? 'مجاني' : $plan->plan_price . '$' }} </td>
                                    <td> {{ $plan->start_date }} </td>
                                    <td> {{ $plan->expire_date }} </td>
                                    <td> 
                                        <a href="{{ asset('') }}portal/new_membership_market">تجديد</a>&nbsp;|&nbsp;
                                        <a onclick="showPlanDetails({{ $plan->serial_no }});" href="#">تفاصيل</a>
                                    </td>
                                </tr>
                                @endforeach
                                @if (count($plans) == 0)
                                <tr>
                                    <td colspan="5" style="text-align: center;"> لا يوجد خطط </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
        <div class="col-md-5">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">التنبيهات</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                <ul class="feeds">
                                    @forelse($notifications as $notification)
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-{{ $notification->type_color }}">
                                                            <i class="fa fa-{{ $notification->type_icon }}"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">{{ $notification->body_ar }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">{{ humanTiming($notification->date_created) }}</div>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    <li style="text-align: center;">
                                        <p>لا يوجد تنبيهات</p>
                                    </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
    </div>
@endsection