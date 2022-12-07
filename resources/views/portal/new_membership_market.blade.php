@extends('portal.layouts.my_account')

@section('title', 'إنشاء اشتراك سوق')

@section('account_contents')
    <div class="row">
     <div class="col-md-8">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">تفاصيل اشتراك السوق</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="list-group panel">
                        <div id="stocks-all" class="collapse in">
                            <ul class="stocks-list latest-posts clearfix shop">
                                @foreach ($all_markets as $market)
                                <li class="col-sm-12 col-md-6 stock-box"><i class="stock-selected fa fa-check-circle" style="display: none;"></i>
                                    <section>
                                        <div class="post-thumb">
                                            <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $market->logo }}" style="width: 70px; height: 70px">
                                        </div>
                                        <div class="post-details">
                                            <div class="description">
                                                <h5><i  id="add-market-{{ $market->serial_no }}" 
                                                        data-market-name="{{ $market->label_ar }}" 
                                                        data-market-id="{{ $market->serial_no }}"
                                                        data-market-price="{{ $market->market_price }}"" 
                                                        class="add-stock fa fa-plus hidden"></i>&nbsp;{{ $market->label_ar }}</h5>
                                            </div>
                                        </div>
                                    </section>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
        <div class="col-md-4">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">الملخص</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <script>
                    // Initialize Start on page load
                    
                    // StartCheckout.config({
                    //   key: "<?php echo $apiKeys['open_key']; ?>",
                    //   complete: function(params) {
                    //     submitFormWithToken(params);
                    //   }
                    // });
                    </script>

                    <form method="POST" onsubmit="return false;">
                        <div data-step="5" data-intro="يظهر في مختصر الأسعار تفاصيل الأسهم والأسواق المختارة" data-position='right' ><!--  id="sticker-2" -->
                            <div class="widget relative"><!-- sticky-menu  -->
                                <div class="widget-title">
                                    <h3 class="title">مختصر الأسعار<a class="widget-button btn btn-warning pull-right" onclick="clearAll();">تفريغ</a></h3>
                                </div>
                                <div id="cart-contents" data-step="9" data-intro="لا يظهر الخصم على أسعار الأسهم مباشرة وإنما كبند مستقل باللون الأحمر" data-position="right">
                                    <div class="list-group panel">
                                        <div class="collapse in" id="stocks-selection" data-step="6" data-intro="بمكنك إزالة الأسهم من هنا بالنقر على الزر إلى يمين اسم السهم" data-position='right'>
                                            <span class="no-selection">لم يتم اختيار أي سهم</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="totals-section" class="collapse in" style="padding: 0 20px;">
                                    <a style="text-decoration: none;">
                                        <span class="overflown-text">الإجمالي بعد الخصم</span>
                                        <span id="total-cart-value" class="pull-right">0$</span>
                                    </a>
                                </div>
                                <!-- category-list -->
                            </div>

                            <div class="widget relative sticky-menu" data-step="10" data-intro="بزيادة مدة الاشتراك تحصل على خصم كما هو موضح" data-position="right">
                                <div id="sticker-2">
                                    <ul id="cart-contents-menu">
                                        <!--<li class="plan-selected" style="width: 100%;">
                                            <div id="7-days-membership" class="checkbox offer">
                                                <div class="ribbon-wrapper right">
                                                    <div class="ribbon gold">خصم 100%</div>
                                                </div>
                                                <input type="radio" name="poll" checked="" />
                                                <label class="period">7 أيام</label>
                                                <span class="monthly">فترة تجريبية</span>
                                                <span class="total"><del></del>&nbsp;مجاناً</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>-->
                                        <li class="plan-selected">
                                            <div id="1-month-membership" class="checkbox">
                                                <input type="radio" name="poll" value="1" checked />
                                                <label class="period">شهر</label>
                                                <!-- <span class="monthly">-</span> -->
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="3-month-membership" class="checkbox offer">
                                                <!-- <div class="ribbon-wrapper right">
                                                    <div class="ribbon bronze">خصم 25%</div>
                                                </div> -->
                                                <input type="radio" name="poll" value="3" />
                                                <label class="period">3 شهور</label>
                                                <!-- <span class="monthly">-</span> -->
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="6-month-membership" class="checkbox offer">
                                                <!-- <div class="ribbon-wrapper right">
                                                    <div class="ribbon silver">خصم 35%</div>
                                                </div> -->
                                                <input type="radio" name="poll" value="6" />
                                                <label class="period">6 شهور</label>
                                                <!-- <span class="monthly">-</span> -->
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="12-month-membership" class="checkbox offer">
                                                <!-- <div class="ribbon-wrapper right" style="right:0; top:-10px">
                                                    <div class="ribbon gold market-discount">خصم 40%</div>
                                                </div> -->
                                                <input type="radio" name="poll" value="12" />
                                                <label class="period">سنة</label>
                                                <!-- <span class="monthly" style="color: #cb8c10">-</span> -->
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="clearfix hidden" style="margin-bottom: 10px;">
                                        <div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">
                                            <input id="discount-code-input" type="text" placeholder="أدخل كود الخصم هنا" onkeydown="seekDiscountCode(event);" style="width: 100%; text-align: center;" />
                                        </div>
                                        <div class="col-lg-4" style="padding: 0;">
                                            <button id="discount-code-button" class="widget-button btn btn-default" onclick="seekDiscountCode();" style="display: block; width: 100%; text-align: center; background-color: black;">استخدام</button>
                                        </div>
                                    </div>

                                    @if ($currentUser->points_balance > 0)
                                    <div id="points-add-control" class="clearfix hidden" style="margin-bottom: 10px;">
                                        <div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">
                                            <input id="discount-code-input" type="text" readonly="" value="لديك {{ $currentUser->points_balance }} نقطة تعادل {{ round($currentUser->points_balance / 10) }}$"  style="width: 100%; text-align: center;" />
                                        </div>
                                        <div class="col-lg-4" style="padding: 0;">
                                            <button id="discount-code-button" class="widget-button btn btn-default" onclick="applyPointsDiscount({{ $currentUser->points_balance }});" style="background-color: #f0ad4e; display: block; width: 100%; text-align: center;">استخدام</button>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="paypal-button-container-sb" class="clearfix" style=""></div>
                                            <button id="register-btn" type="submit" onclick='payAndGo();' class="widget-button btn btn-default" style="background-color: #2C2E2F;display: none;width: 100%;margin-top: 10px;padding: 12px !important;font-size: 120%;color: black;border-radius: 5px;" href="#">إتمام الاشتراك</button> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        var totalStocks = 0;
    
    
        $(document).ready(function(){
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'silver',
                    layout: 'vertical',
                    label: 'paypal',
                    tagline: false
                },
                // onClick: function () {
                //     purchase_units[0].description = ;
                //     purchase_units[0].amount.value = amount;

                //     if(invoiceid.value !== '') {
                //         purchase_units[0].invoice_id = 'TEST-2102';
                //     }
                // },
                createOrder: function(data, actions) {
                    var amount = Number($("#cart-contents-menu input:checked")
                        .parent("div")
                        .find(".total")
                        .text().replace("$", ""));

                    if ((amount === 0 || isNaN(amount)) && checkedCount == 0) {
                        return;
                    }

                    return actions.order.create({
                        purchase_units: [
                            {
                                "amount": {"currency_code":"USD","value":amount},
                                "description": "تجديد خطة اشتراك Trend Cast",
                                "invoice_id": "{{time()}}-{{ $currentUser->serial_no }}"
                            }
                        ]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        var params = {};
                        params.token = details.id;
                        params.email = "{{ $currentUser->email }}";
                        submitFormWithToken(params);
                    });
                },
                onError: function(err) {
                    console.error(err);
                }
            }).render('#paypal-button-container-sb');
        });

        function payAndGo() {
            var checkedCount = $("#cart-contents-menu input:checked");

            var amount = Number($("#cart-contents-menu input:checked")
                .parent("div")
                .find(".total")
                .text().replace("$", ""));

            if ((amount === 0 || isNaN(amount)) && checkedCount == 0) {
                return;
            }

            if ((amount === 0 || isNaN(amount))) {
                submitFormWithToken();
            }
            // else {
            //     StartCheckout.open({
            //       amount:   amount * 100,
            //       currency: "USD",
            //       email: "{{ $currentUser->email }}"
            //     });
            // }
        }

        /**
         * This method is called after a token is returned when the form is submitted.
         * We add the token + email to the form, and then submit the form.
         */
        function submitFormWithToken(params) {
          // Append the params to the form
          frm = $("<form action='{{ asset('') }}portal/completeStockRegistration' method='POST'></form>");

          if (params !== undefined) {
              frm.append("<input type='hidden' name='startToken' value='" + params.token + "' />");
              frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");
          }

          frm.append("<input type='hidden' name='membershipType' value='markets' />");

          if (appliedDiscountCode !== undefined) {
            frm.append("<input type='hidden' name='appliedDiscountCode' value='" + appliedDiscountCode + "' />");
          }

          if (appliedPoints > 0) {
            frm.append("<input type='hidden' name='appliedPoints' value='true' />");
          }

          $(".purchase-stock").each(function(key, value) {
          	frm.append("<input type='hidden' name='selected_market[]' value='" + $(this).val() + "' />");
          });
          

          frm.append("<input type='hidden' name='selected_plan' value='" + $("#cart-contents-menu input:checked").val() + "' />");

          if (params !== undefined) {
            frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");
          }

          frm.append('{{ csrf_field() }}');
          frm.appendTo(document.body);
          // Finally, submit the form
          frm.submit();
        }

        function clearAll(removeSelection = true) {
            $(".added-stock").remove();

            if(!removeSelection){
                var selectedCount = $(".stock-toggle-selected").length;
                if(selectedCount==0){
                    $("#stocks-selection .no-selection").show();
                    // $(".added-stock").remove();
                }
            }else{
                $("#stocks-selection .no-selection").show();
                $("#stocks-all .stock-selected").hide();
                $(".stock-toggle-selected").removeClass("stock-toggle-selected");
            }

            $("#total-cart-value").text("0$");
            
            $("#1-month-membership .total").text("-");
            $("#1-month-membership .monthly").text("-");

            $("#3-month-membership .total").text("-");
            $("#3-month-membership .monthly").text("-");

            $("#6-month-membership .total").text("-");
            $("#6-month-membership .monthly").text("-");

            $("#12-month-membership .total").text("-");
            $("#12-month-membership .monthly").text("-");
        }

        $("#cart-contents-menu input").on("click", function () {
            $(".plan-selected").removeClass("plan-selected");
            $(this).parents("li").addClass("plan-selected");
        });

        function addHints() {
            intro = introJs();
            intro.setOptions({
                hints: [
                    {
                        element: document.querySelector('#step1'),
                        hint: "This is a tooltip.",
                        hintPosition: 'top-middle'
                    },
                    {
                        element: '#step2',
                        hint: 'More features, more fun.',
                        position: 'left'
                    },
                    {
                        element: '#step4',
                        hint: "<b>Another</b> step.",
                        hintPosition: 'top-middle'
                    }
                ]
            });
            intro.onhintsadded(function () {
                console.log('all hints added');
            });
            intro.onhintclick(function (hintElement, item, stepId) {
                console.log('hint clicked', hintElement, item, stepId);
            });
            intro.onhintclose(function (stepId) {
                console.log('hint closed', stepId);
            });
            intro.addHints();
        }

        $("#cart-contents-menu input").on("click", function () {
            $(".plan-selected").removeClass("plan-selected");
            $(this).parents("li").addClass("plan-selected");
            updateTotalAmount();
        });

        $("#search-stocks").on("keyup", function () {
            $("#stocks-all > a").css("display", "none");
            $("#stocks-all > a + div").css("display", "none");
            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li").css("display", "none");

            $("#stocks-all > a + div:contains('" + $(this).val() + "')").css("display", '').removeClass('collapse').addClass('in collapse').prev("a").css("display", '');

            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li:contains('" + $(this).val() + "')").css("display", '');
        });

        $("body").on("click", ".add-stock, .stock-box", function () {
            // clearAll();
            clearDiscount();

            $("#stocks-selection .no-selection").hide();

            var $this = $(this);

            if ($this.hasClass("stock-box")) {
                $this = $(this).find(".add-stock");
            }

            $this.parents(".stock-box").toggleClass("stock-toggle-selected");

            var marketId = $this.data("market-id");

            $("#add-market-" + marketId).toggleClass("fa-plus");
            $("#add-market-" + marketId).toggleClass("fa-minus");

            $("#add-market-" + marketId).parents("li").find(".stock-selected").toggle();

            totalStocks = $('.stock-toggle-selected').length;

            clearAll(false);
            $('.stock-toggle-selected').each(function(){
                var marketId = $(this).find(".add-stock").data("market-id");
                var marketName = $(this).find(".add-stock").data("market-name");
                var stockPrice = $(this).find(".add-stock").data("stock-price");
                var marketPrice = $(this).find(".add-stock").data("market-price");
                $("#stocks-selection").append(
                    '<a id="market-' + marketId + '-marker" data-market-price="'+marketPrice+'" href="#market-' + marketId + '" class="added-stock list-group-item market-' + marketId + '" data-toggle="collapse" data-parent="#1"><span class="overflown-text">' + marketName + '</span><input class="purchase-stock" type="hidden" name="selected_market" value="' + marketId + '" /></a>'
                );
            });

            seekDiscountCode();


            refreshTotalPayment();

            return false;
        });

        function refreshTotalPayment() {
            var total = {{ $plan->monthly_fees }};
            var total1Month = {{ $plan->monthly_fees }};
            var total3Months = {{ $plan->monthly_fees_3_months }};
            var total6Months = {{ $plan->monthly_fees_6_months }};
            var total12Months = {{ $plan->monthly_fees_12_months }};

            var basicPlan = [{{$basicPlan->monthly_fees}},{{$basicPlan->monthly_fees_3_months}},{{$basicPlan->monthly_fees_6_months}},{{$basicPlan->monthly_fees_12_months}}];
            var silverPlan = [{{$silverPlan->monthly_fees}},{{$silverPlan->monthly_fees_3_months}},{{$silverPlan->monthly_fees_6_months}},{{$silverPlan->monthly_fees_12_months}}];
            var goldenPlan = [{{$goldenPlan->monthly_fees}},{{$goldenPlan->monthly_fees_3_months}},{{$goldenPlan->monthly_fees_6_months}},{{$goldenPlan->monthly_fees_12_months}}];
            
            
            var pointsDiscount = Math.round(appliedPoints / 10);

            $('.added-stock').each(function(){
                var currentMarketPrice = $(this).data('market-price');
                total += currentMarketPrice;
            });
            total12Months = total;
            var total12MonthsBeforeDC = total;
            if (totalStocks > 0) {
                if(totalStocks === 1){
                    total1Month = basicPlan[0];
                    total3Months = basicPlan[1];
                    total6Months = basicPlan[2];
                    total12Months = basicPlan[3];
                }else if(totalStocks === 2){
                    total1Month = silverPlan[0];
                    total3Months = silverPlan[1];
                    total6Months = silverPlan[2];
                    total12Months = silverPlan[3];
                }else{
                    total1Month = goldenPlan[0];
                    total3Months = goldenPlan[1];
                    total6Months = goldenPlan[2];
                    total12Months = goldenPlan[3];
                }
                // total1Month = total1Month - (codeDiscountRate ? (total1Month * codeDiscount / 100) : codeDiscount);
                total1Month = total1Month < 0 ? 0 : total1Month;

                // total3Months = total3Months - (codeDiscountRate ? (total3Months * codeDiscount / 100) : codeDiscount);
                total3Months = total3Months < 0 ? 0 : total3Months;

                // total6Months = total6Months - (codeDiscountRate ? (total6Months * codeDiscount / 100) : codeDiscount);
                total6Months = total6Months < 0 ? 0 : total6Months;

                // total12Months = total12Months - (codeDiscountRate ? (total12Months * codeDiscount / 100) : codeDiscount);
                total12Months = total12Months < 0 ? 0 : total12Months;

            } else {
                $("#total-cart-value").text("0$");
            }

            if (totalStocks === 0) {
                $("#1-month-membership .total").text("-");
                $("#1-month-membership .monthly").text("-");

                $("#3-month-membership .total").text("-");
                $("#3-month-membership .monthly").text("-");

                $("#6-month-membership .total").text("-");
                $("#6-month-membership .monthly").text("-");

                $("#12-month-membership .total").text("-");
                $("#12-month-membership .monthly").text("-");
            } else {
                $("#1-month-membership .total").text(negativeToZero(Math.round(total1Month - pointsDiscount)) + "$");
                $("#1-month-membership .monthly").text(total1Month + "$ في الشهر");

                $("#3-month-membership .total").text(negativeToZero(Math.round(total3Months - pointsDiscount)) + "$");
                $("#3-month-membership .monthly").text(Math.round(total3Months / 3) + "$ في الشهر");

                $("#6-month-membership .total").text(negativeToZero(Math.round(total6Months - pointsDiscount)) + "$");
                $("#6-month-membership .monthly").text(Math.round(total6Months / 6) + "$ في الشهر");
                
                var amount12 = negativeToZero(Math.round(total12Months - pointsDiscount));
                $("#12-month-membership .total").text(amount12 + "$");
                $("#12-month-membership .monthly").text("قبل الخصم: "+negativeToZero(total12MonthsBeforeDC) + "$");
                if(amount12 === 0){
                    $('#register-btn').show();
                    $('#paypal-button-container-sb').hide();
                }else{
                    $('#register-btn').hide();
                    $('#paypal-button-container-sb').show();
                }
            }

            updateTotalAmount();

        }
        function updateTotalAmount(){
            var totalAmountDollar = $('.plan-selected .total').html();
            $("#total-cart-value").text(totalAmountDollar);
        }
    </script>
@endsection