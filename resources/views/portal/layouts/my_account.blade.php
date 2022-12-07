@extends('portal.layouts.master')

@section('stylesheets')
        @parent
        <link href="{{ asset('portal/assets/pages/css/profile-rtl.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <script type="text/javascript">
        var codeDiscount = 0;
        var codeDiscountRate = true;
        var appliedDiscountCode;
        var appliedPoints = 0;

        function clearPointsDiscount() {
            appliedPoints = 0;

            $("#points-discount-marker").remove();

            $("#points-add-control").slideDown(100);

            refreshTotalPayment !== undefined ? refreshTotalPayment() : refreshRenewalPayment();
        }

        function clearDiscount() {
            codeDiscount = 0;
            codeDiscountRate = 0;
            appliedDiscountCode = undefined;

            $("#discount-code-input").val("").prop("disabled", false);

            $("#code-discount-marker").remove();

            $("#discount-code-button").text("استخدام");

            refreshTotalPayment !== undefined ? refreshTotalPayment() : refreshRenewalPayment();
        }

        function applyPointsDiscount(points) {
            appliedPoints = points;

            $("#totals-section").append(
                            '<a style="text-decoration: none; padding-left: 0; padding-right: 0;" id="points-discount-marker" class="discount"><i onclick="clearPointsDiscount();" style="margin-left: 3px;" class="fa fa-trash-o remove-points-discount"></i><span class="overflown-text">استبدال ' + appliedPoints + ' نقطة</span><span class="pull-right">' + Math.round(appliedPoints / 10) + '$</span></a>'
                            );

            $("#points-add-control").slideUp(100);

            refreshTotalPayment !== undefined ? refreshTotalPayment() : refreshRenewalPayment();
        }


        function seekDiscountCode(event) {
            if ($("#discount-code-button").text() === "استخدام") {
                if (event !== undefined) {
                    if (event.keyCode !== 13 || $(event.currentTarget).val() === "") {
                        return;
                    }
                }

                var $textField = event === undefined ? $("#discount-code-input") : $(event.currentTarget);

                var discountCode = $textField.val();

                if (discountCode === "") {
                    if(totalStocks==undefined){
                        return;
                    }
                    if(totalStocks===1){
                        discountCode = 'DC40';
                    }else if(totalStocks===2){
                        discountCode = 'DC50';
                    }else if(totalStocks>=3){
                        discountCode = 'DC60';
                    }else{
                        return;
                    }
                }

                $textField.prop("disabled", true);
                $("#discount-code-button").prop("disabled", true);

                $.ajax({
                    url: "{{ asset('') }}portal/api/checkDiscountCode/" + discountCode,
                    method: "GET",
                    data: $("#password-change-form").serialize(),
                    dataType: "json"
                }).done(function(data) {
                    $("#discount-code-button").prop("disabled", false);

                    // if (data.length > 0) {
                    //     $("#discount-code-button").text("إلغاء");
                    //     $textField.val(data[0].discount_description_ar);

                    //      $("#totals-section").prepend(
                    //         '<a style="text-decoration: none; padding-left: 0; padding-right: 0;" id="code-discount-marker" class="discount"><i onclick="clearDiscount();" style="margin-left: 3px;" class="fa fa-trash-o remove-discount"></i><span class="overflown-text">' + data[0].discount_description_ar  + '</span><span class="pull-right">' + data[0].amount + (data[0].rate_or_fixed === 0 ? "%" : "$") + '</span></a>'
                    //         );

                    //     appliedDiscountCode = data[0].code;
                    //     codeDiscount = data[0].amount;
                    //     codeDiscountRate = data[0].rate_or_fixed === 0;

                    //     refreshTotalPayment !== undefined ? refreshTotalPayment() : refreshRenewalPayment();
                    // } else {
                    //     $textField.prop("disabled", false);

                    //     if(discountCode != 'DC40' && discountCode != 'DC50' && discountCode != 'DC60'){
                    //         bootbox.alert({
                    //             message: "لم يتم التعرف على الكود المدخل"
                    //         });
                    //     }
                    // }
                });
            } else {
                clearDiscount();
            }
        }
    </script>

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{ asset('') }}portal/imgs/profile/profile.png" class="img-responsive" alt=""> </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> {{ $currentUser->full_name }} </div>
                        <div class="profile-usertitle-job"> رصيد النقاط - {{ $currentUser->points_balance }} </div>
                    </div>

                    <div class="profile-userbuttons" style="margin-top: 5px; position: relative;">
                        <input id="referral-link" onfocus="$(this).select();" style="direction: ltr; text-align: center; padding-left: 60px; box-sizing: border-box; width: 90%;" type="text" value="{{ asset('signup/referral?rid=' . $currentUser->referral_link) }}" />
                        <button id="copy-referral" data-clipboard-target="#referral-link" style="position: absolute; transform: translate(100%, 0); padding: 4px 18px; border-radius: 0 !important;" type="button" class="btn btn-circle green btn-sm">نسخ</button>
                        <p style="margin-top: 5px;">شارك رابط التسجيل مع أصدقائك للحصول على نقاط إضافية.</p>
                    </div>

                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <!--<button type="button" class="btn btn-circle green btn-sm">تعديل البيانات</button>-->
                        <button id="change-password" type="button" class="btn btn-circle red btn-sm">تغيير كلمة المرور</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="{{ $active_page == 'my_account' ? 'active' : '' }}">
                                <a href="{{ asset('') }}portal/my_account">
                                    <i class="icon-home"></i> تفاصيل الحساب </a>
                            </li>
                            <!-- <li class="{{ $active_page == 'new_membership' ? 'active' : '' }}">
                                <a href="{{ asset('') }}portal/new_membership">
                                    <i class="icon-settings"></i> تسجيل اشتراك مخصص </a>
                            </li> -->
                            <li class="{{ $active_page == 'new_membership_market' ? 'active' : '' }}">
                                <a href="{{ asset('') }}portal/new_membership_market">
                                    <i class="icon-settings"></i> تسجيل اشتراك سوق </a>
                            </li>
                            <li class="{{ $active_page == 'memberships_archive' ? 'active' : '' }}">
                                <a href="{{ asset('') }}portal/memberships_archive">
                                    <i class="icon-notebook"></i> أرشيف الاشتراكات </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
                <!-- PORTLET MAIN -->
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                
                @yield('account_contents')

            </div>
            <!-- END PROFILE CONTENT -->
        </div>
        <script type="text/javascript">
            new Clipboard('#copy-referral');
        </script>
    </div>
@endsection