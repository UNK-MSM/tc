@extends('portal.layouts.my_account')

@section('title', 'إنشاء اشتراك مخصص')

@section('account_contents')
    <div class="row">
     <div class="col-lg-8 col-md-7">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">تفاصيل الاشتراك المخصص</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="list-group panel">
                        <div id="stocks-all" class="collapse in">
                            @foreach ($all_markets as $market)
                            <a id="step-2-interaction" data-step="2" data-intro="يمكن إظهار الأسهم بالنقر على إسم السوق" data-position="left" href="#stock-market-{{ $market->serial_no }}" class="list-group-item" data-toggle="collapse" data-parent="#1">&nbsp;<img onerror="loadAlternativeImage(this);" width="25" height="25" src="{{ '/tcps/public/img/logo/d/' . $market->logo }}" />&nbsp;{{ $market->label_ar }}</a>
                            <div class="collapse list-group-submenu default-uncollapsed" id="stock-market-{{ $market->serial_no }}">
                                <ul data-position='left' data-step="3" data-intro="تظهر في القائمةالأسهم وأسعارها، بالنقر عليها يتم إضافتها للسلة" id="uae-stocks" class="stocks-list latest-posts clearfix shop">
                                    @foreach ($stocks as $stock)
                                    @if ($stock->stock_market_serial_no == $market->serial_no)
                                    <li class="col-sm-12 col-md-4 stock-box {{ $stock->purchased == 1 ? "purchased" : "" }}">
                                        @if ($stock->purchased == 1)
                                        <i title="هذا السهم مضاف لديك بالفعل" class="stock-exists fa fa-cloud-download" style=""></i>
                                        @endif
                                        <i class="stock-selected fa fa-check-circle" style="display: none;"></i>
                                        <section>
                                            <div class="post-thumb">
                                                <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" style="width: 70px; height: 70px">
                                            </div>
                                            <div class="post-details">
                                                <div class="description">
                                                    <h5><i  id="add-stock-{{ $stock->serial_no }}" 
                                                            data-stock-name="{{ $stock->stock_name_ar }}" 
                                                            data-stock-id="{{ $stock->serial_no }}" 
                                                            data-market-name="{{ $market->label_ar }}" 
                                                            data-market-id="{{ $market->serial_no }}" 
                                                            data-stock-price="{{ $stock->custom_membership_price }}"" 
                                                            data-market-price="{{ $market->market_price }}"" 
                                                            class="add-stock fa fa-plus hidden"></i>&nbsp;{{ $stock->stock_name_ar }}</h5>
                                                </div>
                                                <div data-base-price="{{ $stock->custom_membership_price }}" class="price">{{ $stock->custom_membership_price }}$</div>
                                            </div>
                                        </section>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
        <div class="col-lg-4 col-md-5">
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
                    StartCheckout.config({
                      key: "<?php echo $apiKeys['open_key']; ?>",
                      complete: function(params) {
                        submitFormWithToken(params);
                      }
                    });
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
                                    <a>
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
                                                <input type="radio" name="poll" checked="" value="1" />
                                                <label class="period">شهر</label>
                                                <span class="monthly">-</span>
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="3-month-membership" class="checkbox offer">
                                                <div class="ribbon-wrapper right">
                                                    <div class="ribbon bronze">خصم 25%</div>
                                                </div>
                                                <input type="radio" name="poll" value="3" />
                                                <label class="period">3 شهور</label>
                                                <span class="monthly">-</span>
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="6-month-membership" class="checkbox offer">
                                                <div class="ribbon-wrapper right">
                                                    <div class="ribbon silver">خصم 35%</div>
                                                </div>
                                                <input type="radio" name="poll" value="6" />
                                                <label class="period">6 شهور</label>
                                                <span class="monthly">-</span>
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="12-month-membership" class="checkbox offer">
                                                <div class="ribbon-wrapper right">
                                                    <div class="ribbon gold">خصم 45%</div>
                                                </div>
                                                <input type="radio" name="poll" value="12" />
                                                <label class="period">سنة</label>
                                                <span class="monthly">-</span>
                                                <span class="total">-</span>
                                                <i class="stock-selected fa fa-check-circle"></i>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix" style="margin-bottom: 10px;">
                                        <div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">
                                            <input id="discount-code-input" type="text" placeholder="أدخل كود الخصم هنا" onkeydown="seekDiscountCode(event);" style="width: 100%; text-align: center;" />
                                        </div>
                                        <div class="col-lg-4" style="padding: 0;">
                                            <button id="discount-code-button" class="widget-button btn btn-default" onclick="seekDiscountCode();" style="display: block; width: 100%; text-align: center; background-color: black;">استخدام</button>
                                        </div>
                                    </div>
                                    @if ($currentUser->points_balance > 0)
                                    <div id="points-add-control" class="clearfix" style="margin-bottom: 10px;">
                                        <div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">
                                            <input id="discount-code-input" type="text" readonly="" value="لديك {{ $currentUser->points_balance }} نقطة تعادل {{ round($currentUser->points_balance / 10) }}$"  style="width: 100%; text-align: center;" />
                                        </div>
                                        <div class="col-lg-4" style="padding: 0;">
                                            <button id="discount-code-button" class="widget-button btn btn-default" onclick="applyPointsDiscount({{ $currentUser->points_balance }});" style="background-color: #f0ad4e; display: block; width: 100%; text-align: center;">استخدام</button>
                                        </div>
                                    </div>
                                    @endif
                                    <button type="button" onclick='payAndGo();' class="widget-button btn btn-default" style="display: block; width: 100%; margin-top: 10px; padding: 12px; font-size: 120%; color: black;" href="#">إتمام الاشتراك</button>

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
        var monthlyTotal = 0;
        var totalStocks = 0;
        var totalDiscount = 0;

        function payAndGo() {
            // var checkedCount = $("#cart-contents-menu input:checked");

            var amount = Number($("#cart-contents-menu input:checked")
                .parent("div")
                .find(".total")
                .text().replace("$", ""));

            /*if (amount === 0 || isNaN(amount)) {
                return;
            }*/
            
            if ((amount === 0 || isNaN(amount))) {
                submitFormWithToken();
            } else {
                StartCheckout.open({
                  amount:   amount * 100,
                  currency: "USD",
                  email: "{{ $currentUser->email }}"
                });
            }
        }

        /**
         * This method is called after a token is returned when the form is submitted.
         * We add the token + email to the form, and then submit the form.
         */
        function submitFormWithToken(params) {
          // Append the params to the form
          frm = $("<form action='{{ asset('') }}portal/completeStockRegistration' method='POST'></form>");

          if (params !== undefined) {
              frm.append("<input type='hidden' name='startToken' value='" + params.token.id + "' />");
              frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");
          }
          if (appliedDiscountCode !== undefined) {
          	frm.append("<input type='hidden' name='appliedDiscountCode' value='" + appliedDiscountCode + "' />");
          }

          if (appliedPoints > 0) {
            frm.append("<input type='hidden' name='appliedPoints' value='true' />");
          }

          frm.append("<input type='hidden' name='membershipType' value='customStocks' />");

          $(".purchase-stock").each(function(key, value) {
            frm.append("<input type='hidden' name='selected_stocks[]' value='" + $(this).val() + "' />");
          });

          frm.append("<input type='hidden' name='selected_plan' value='" + $("#cart-contents-menu input:checked").val() + "' />");

        //   if (params !== undefined) {
        //     frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");
        //   }

          frm.append('{{ csrf_field() }}');
          frm.appendTo(document.body);
          // Finally, submit the form
          frm.submit();
        }

        function clearAll() {
            $(".fa-minus").each(function () {
                $(this).click();
            });
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

        $("#search-stocks").on("keyup", function () {
            $("#stocks-all > a").css("display", "none");
            $("#stocks-all > a + div").css("display", "none");
            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li").css("display", "none");

            $("#stocks-all > a + div:contains('" + $(this).val() + "')").css("display", '').removeClass('collapse').addClass('in collapse').prev("a").css("display", '');

            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li:contains('" + $(this).val() + "')").css("display", '');
        });

        $("body").on("click", ".add-stock, .stock-box", function () {
            var $this = $(this);

            if ($this.hasClass("stock-box")) {
                $this = $(this).find(".add-stock");
            }

            return completeStockAddRemove($this, true);
        });

        function completeStockAddRemove($this, checkDuplicate) {
            var stockName = $this.data("stock-name");
            var stockId = $this.data("stock-id");
            var marketName = $this.data("market-name");
            var marketId = $this.data("market-id");
            var stockPrice = $this.data("stock-price");
            var marketPrice = $this.data("market-price");

            if (checkDuplicate) {
                if ($('#stock-' + stockId).size() === 0 && $this.parents(".stock-box").hasClass("purchased")) {
                    bootbox.alert("هذا السهم مضاف لديك من قبل.");

                    return;
                }
            }

            $("#stocks-selection .no-selection").hide();

            $this.parents(".stock-box").toggleClass("stock-toggle-selected");

            $("#add-stock-" + stockId).toggleClass("fa-plus");
            $("#add-stock-" + stockId).toggleClass("fa-minus");

            $("#add-stock-" + stockId).parents("li").find(".stock-selected").toggle();

            if ($('#stock-' + stockId).size() > 0) {
                totalStocks--;

                var totalPrice = $('#market-' + marketId + '-marker .market-total-price').data('market-total-price') - stockPrice;

                $('#market-' + marketId + '-marker .market-total-price').data('market-total-price', totalPrice);
                $('#market-' + marketId + '-marker .market-total-price').text(totalPrice + '$');

                monthlyTotal = monthlyTotal - stockPrice;

                $('#stock-' + stockId).remove();

                if ($('#market-' + marketId + ' a.stock').size() === 0) {
                    monthlyTotal = monthlyTotal - marketPrice;

                    $('#market-' + marketId + '-marker').remove();
                    $('#market-' + marketId).remove();

                    if ($(".added-stock").size() === 0) {
                        $("#stocks-selection .no-selection").show();
                    }
                }
            } else {
                totalStocks++;

                if ($('#market-' + marketId).size() > 0) {
                    monthlyTotal = monthlyTotal + stockPrice;

                    var totalPrice = $('#market-' + marketId + '-marker .market-total-price').data('market-total-price') + stockPrice;

                    $('#market-' + marketId + '-marker .market-total-price').data('market-total-price', totalPrice);
                    $('#market-' + marketId + '-marker .market-total-price').text(totalPrice + '$');

                    $('#market-' + marketId).append(
                            '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '" data-market-price="' + marketPrice + '" style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input class="purchase-stock" type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>'
                            );
                } else {
                    monthlyTotal = monthlyTotal + stockPrice + marketPrice;

                    if ($("#discount-marker").size() > 0) {
                        $("#discount-marker").before(
                                '<a id="market-' + marketId + '-marker" href="#market-' + marketId + '" class="added-stock list-group-item market-' + marketId + '" data-toggle="collapse" data-parent="#1"><span class="overflown-text"> إجمالي ' + marketName + '</span><span class="pull-right market-total-price" data-market-total-price="' + (stockPrice + marketPrice) + '" >' + (stockPrice + marketPrice) + '$</span></a>' +
                                '<div class="in collapse list-group-submenu" id="market-' + marketId + '">' +
                                '<a style="display: block;" data-parent="#1"><i class="fa fa-asterisk"></i>رسوم السوق المالي<span class="pull-right">' + marketPrice + '$</span></a>' +
                                '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '" data-market-price="' + marketPrice + '"  style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input class="purchase-stock" type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>' +
                                '</div>'
                                );
                    } else {
                        $("#stocks-selection").append(
                                '<a id="market-' + marketId + '-marker" href="#market-' + marketId + '" class="added-stock list-group-item market-' + marketId + '" data-toggle="collapse" data-parent="#1"><span class="overflown-text">إجمالي ' + marketName + '</span><span class="pull-right market-total-price" data-market-total-price="' + (stockPrice + marketPrice) + '" >' + (stockPrice + marketPrice) + '$</span></a>' +
                                '<div class="in collapse list-group-submenu" id="market-' + marketId + '">' +
                                '<a style="display: block;" data-parent="#1"><i class="fa fa-asterisk"></i>رسوم السوق المالي<span class="pull-right">' + marketPrice + '$</span></a>' +
                                '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '"  data-market-price="' + marketPrice + '" style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input class="purchase-stock" type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>' +
                                '</div>'
                                );
                    }
                }
            }

            /*if (totalStocks === 5 && $("#discount-marker").size() === 0) {
                $(".price").each(function () {
                    var basePrice = $(this).data("base-price");

                    $(this).html('<del>' + basePrice + '$</del> ' + (basePrice * 50 / 100) + "$")
                });
            } else */

             if (totalStocks === 6 && $("#discount-marker").size() === 0) {
                $(".price").each(function () {
                    var basePrice = $(this).data("base-price");

                    $(this).html('<del>' + basePrice + '$</del> ' + (basePrice * 50 / 100) + "$")
                });

                totalDiscount = ((5 - totalStocks) * stockPrice * 0.5);

                $("#stocks-selection").append(
                        '<a id="discount-marker" class="discount">خصم 50% بعد 5 أسهم<span class="pull-right market-total-price" data-market-total-price="' + ((5 - totalStocks) * stockPrice * 0.5) + '" >' + ((5 - totalStocks) * stockPrice * 0.5) + '$</span></a>'
                        );
            } else if (totalStocks > 5 && $("#discount-marker").size() > 0) {
                totalDiscount = ((5 - totalStocks) * stockPrice * 0.5);

                $("#discount-marker .market-total-price").text(((5 - totalStocks) * stockPrice * 0.5) + '$').data('market-total-price', ((5 - totalStocks) * stockPrice * 0.5));
            } else if (totalStocks <= 5 && $("#discount-marker").size() > 0) {
                totalDiscount = ((5 - totalStocks) * stockPrice * 0.5);

                $("#discount-marker").remove();

                $(".price").each(function () {
                    var basePrice = $(this).data("base-price");

                    $(this).html(basePrice + "$");
                });
            }

            refreshTotalPayment();

            return false;
        }

		function refreshTotalPayment() {
			var total = (monthlyTotal + totalDiscount);

			total = total - (codeDiscountRate ? (total * codeDiscount / 100) : codeDiscount);

            var pointsDiscount = Math.round(appliedPoints / 10);

			total = total < 0 ? 0 : total;

            $("#total-cart-value").text(Math.round(total) + "$");

            if (monthlyTotal + totalDiscount === 0) {
                $("#1-month-membership .total").text("-");
                $("#1-month-membership .monthly").text("-");

                $("#3-month-membership .total").text("-");
                $("#3-month-membership .monthly").text("-");

                $("#6-month-membership .total").text("-");
                $("#6-month-membership .monthly").text("-");

                $("#12-month-membership .total").text("-");
                $("#12-month-membership .monthly").text("-");
            } else {
                $("#1-month-membership .total").text(negativeToZero(Math.round(total - pointsDiscount)) + "$");
                $("#1-month-membership .monthly").text(Math.round(total) + "$ في الشهر");

                $("#3-month-membership .total").text(negativeToZero(Math.round((total * 65 / 100) * 3 - pointsDiscount)) + "$");
                $("#3-month-membership .monthly").text(Math.round(total * 65 / 100) + "$ في الشهر");

                $("#6-month-membership .total").text(negativeToZero(Math.round((total * 55 / 100) * 6 - pointsDiscount)) + "$");
                $("#6-month-membership .monthly").text(Math.round(total * 55 / 100) + "$ في الشهر");

                $("#12-month-membership .total").text(negativeToZero(Math.round((total * 35 / 100) * 12 - pointsDiscount)) + "$");
                $("#12-month-membership .monthly").text(Math.round(total * 35 / 100) + "$ في الشهر");
            }
		}
    </script>
@endsection