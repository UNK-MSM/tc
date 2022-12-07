@extends('frontend.layouts.frontendmaster')

@section('meta')
<title>تسجيل الاشتراك – ترند كاست</title>
<meta name="title" content="تسجيل الاشتراك – ترند كاست" />
<meta name="description" content="خطط الاشتراك والتسعير في ترند كاست، اختر الخطة الأنسب لك، حسب الأسهم التي تريد تحليلها" />
@endsection

@section('content')

@if (isset($showPackages))
<span class="anchor" id="pricing"></span>
    <section class="page-section">
        <div class="image-bg content-in fixed" data-background="{{ asset('') }}img/backgrounds/moving-background-2.jpg">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="section-title white" data-animation="fadeInUp">
                <!-- Heading -->
                <h2 class="title">خطط الاشتراكات</h2>
            </div>
            <div class="row text-center">
                <!--<div class="col-sm-4 col-md-4 col-lg-4" data-animation="fadeInLeft">
                    <div class="pricing light-bg">

                        <div class="ribbon-wrapper">
                            <div class="ribbon yellow">لفترة محدودة</div>
                        </div>
                        <div class="title">
                            <a href="#">اشتراك تجريبي</a>
                        </div>
                        <div class="price-box">

                            <div class="starting">التكلفة</div>
                            <div class="price">مجاناً
                                <span> لمدة أسبوع</span>
                            </div>
                        </div>
                        <ul class="options">

                            <li class="active">كافة الأسواق المالية</li>
                            <li class="active">سبع أسهم من أي سوق</li>
                            <li class="active">تنبؤ يومي</li>
                            <li class="active">تنبؤ آني غير محدود</li>
                            <li class="active">توقع تأثير الأسباب الطارئة</li>
                        </ul>
                        <div class="btn-box">
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-block">اشترك الآن</button>
                        </div>
                    </div>

                </div>-->

                <div class="col-sm-6 col-md-6 col-lg-6" data-animation="fadeInRight">
                    <div class="pricing light-bg">
                        <div class="ribbon-wrapper">
                            <div class="ribbon yellow">أسبوع مجاناً</div>
                        </div>

                        <!-- Title -->
                        <div class="title">
                            <a href="#">اشتراك مخصص</a>
                        </div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">يبدأ من</div>
                            <div class="price">$14
                                <span>شهرياً</span>
                            </div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li class="active">اختيار من كافة الأسواق المالية</li>
                            <li class="active">اختيار من كافة الأسهم المرغوبة</li>
                            <li class="active">تنبؤ يومي</li>
                            <li class="active">تنبؤ آني غير محدود</li>
                            <li class="active">توقع تأثير الأسباب الطارئة</li>
                        </ul>
                        <div class="btn-box">
                            <div class="clearfix"></div>
                             <a href="{{ asset('') }}signup/customPlan" class="btn btn-default btn-block button-1-4">اشترك الآن</a><a href="#" class="btn btn-default btn-block button-3-4">احسب التكلفة</a>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6" data-animation="fadeInRight">
                    <div class="pricing light-bg">
                        <div class="ribbon-wrapper">
                            <div class="ribbon yellow">أسبوع مجاناً</div>
                        </div>

                        <!-- Title -->
                        <div class="title">
                            <a href="#">اشتراك سوق</a>
                        </div>
                        <div class="price-box">
                            <!-- Price -->
                            <div class="starting">القيمة</div>
                            <div class="price">$50
                                <span>شهرياً</span>
                            </div>
                        </div>
                        <ul class="options">
                            <!-- Item List -->
                            <li class="active">سوق مالي واحد</li>
                            <li class="active">كافة أسهم السوق *</li>
                            <li class="active">تنبؤ يومي</li>
                            <li class="active">تنبؤ آني غير محدود</li>
                            <li class="active">توقع تأثير الأسباب الطارئة</li>
                        </ul>
                        <div class="btn-box">
                            <div class="clearfix"></div>
                            <a href="{{ asset('') }}signup/stockMarketPlan" class="btn btn-default btn-block">اشترك الآن</a>
                        </div>
                    </div>
                    <!-- .pricing -->
                </div>
            </div>
        </div>

    </section>

    <p style="padding: 5px; position: relative; top: -30px; text-shadow: 2px 2px 2px black; font-size: 12px; color: white; background-color: rgba(0, 0, 0, 0.4);">* قد تكون بعض الأسهم غير النشطة غير موجودة  بسبب عدم الاقبال عليها ، سنقوم بإدراجها <a href="#support" onclick="$('#support').click()" style="text-decoration: underline; color: white">بناء على طلبك</a> إذا توفرت بياناتها  </p>
    <!-- pricing -->
@else
<section id="fun-factor" class="page-section">
    <div class="image-bg content-in fixed contain" data-background="img/backgrounds/bkgrnd1.jpg"></div>
    <div class="container">
        <div class="row white">
            <div data-animation="fadeInLeft">
                <h3 class="text-uppercase">&nbsp;</h3>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</section>
@endif
<!-- fun-factor -->

<span class="anchor" id="calculator"></span>

<section class="page-section" style="padding-top: 30px;">
    <div class="container">
        <div class="col-md-4 padding-5 special-font">
            <div class="button" data-step="1" data-intro="يتم إضافة تكلفة السوق بمجرد اختيار أول سهم">تكلفة اختيار السوق الواحد 10$ لمدة شهر</div>
        </div>
        <div class="col-md-4 padding-5 special-font">
            <div class="button" data-step="4" data-intro="تحتسب تكلفة أول خمس أسهم بالسعر التقليدي وهو 4$  لكل سهم">كل سهم من الأسهم الخمسة الأولى 4$ لمدة شهر</div>
        </div>
        <div class="col-md-4 padding-5 special-font">
            <div class="button" data-step="7" data-intro="في حال زيادة عدد الأسهم المختارة عن 5 أسهم فإن سعر السهم الواحد يصبح 2$">كل سهم إضافي بعد السهم الخامس 2$ لمدة شهر</div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div>
                    <div class="input-group domain-search bottom-margin-20" data-step="11" data-intro="تستطيع البحث والوصول لأي سهم متوفر لدينا من خلال البحث" data-position="bottom">
                        <input id="search-stocks" style="margin-top: 0 !important;" type="text" class="form-control" placeholder="أدخل اسم السهم للبحث" />
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search" style="font-family: 'Glyphicons Halflings' !important;" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>

                <div class="list-group panel">
                    <div id="stocks-all" class="collapse in">
                        @foreach ($markets as $market)
                        <a id="step-2-interaction" data-step="2" data-intro="يمكن إظهار الأسهم بالنقر على إسم السوق" data-position="left" href="#stock-market-{{ $market->serial_no }}" class="list-group-item" data-toggle="collapse" data-parent="#1"><img width="25" height="25" src="{{ '/tcps/public/img/logo/d/' . $market->logo }}" data-src="{{ '/tcps/public/img/logo/d/' . $market->logo }}" />&nbsp;{{ $market->label_ar }}</a>
                        <div class="collapse list-group-submenu default-uncollapsed" id="stock-market-{{ $market->serial_no }}">
                            <ul data-position='left' data-step="3" data-intro="تظهر في القائمةالأسهم وأسعارها، بالنقر عليها يتم إضافتها للسلة" id="uae-stocks" class="stocks-list latest-posts clearfix shop">
                                @foreach ($stocks as $stock)
                                @if ($stock->stock_market_serial_no == $market->serial_no)
                                <li class="col-sm-12 col-md-4 stock-box"><i class="stock-selected fa fa-check-circle"></i>
                                    <section>
                                        <div class="post-thumb">
                                            <img class="img-rounded" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" data-src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" alt="" title="" style="width: 70px; height: 70px">
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
            <div class="sidebar col-sm-12 col-md-3">
                <form method="POST" action="{{ asset('') }}doRegisterStocks">
                    {{ csrf_field() }}

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
                            
                            <div class="collapse in" style="padding: 0 20px;">
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
                                    @if (!$trial)
                                    <li class="plan-selected" style="width: 100%;">
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
                                    </li>
                                    @else
                                    <li class="plan-selected">
                                        <div id="1-month-membership" class="checkbox">
                                            <input type="radio" name="poll" checked=""/>
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
                                            <input type="radio" name="poll" />
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
                                            <input type="radio" name="poll" />
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
                                            <input type="radio" name="poll" />
                                            <label class="period">سنة</label>
                                            <span class="monthly">-</span>
                                            <span class="total">-</span>
                                            <i class="stock-selected fa fa-check-circle"></i>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                                @if (!$trial)
                                <button type="submit" class="widget-button btn btn-default" style="display: block; width: 100%; margin-top: 10px; padding: 12px; font-size: 120%; color: black;" href="#">إتمام الاشتراك</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('javascript')
<script type="text/javascript">
    var monthlyTotal = 0;
    var totalStocks = 0;
    var totalDiscount = 0;
    //var introjs = introJs();

    function clearAll() {
        $(".fa-minus").each(function () {
            $(this).click();
        });
    }
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

    $(document).ready(function () {
        $("#cart-contents-menu input").on("click", function () {
            $(".plan-selected").removeClass("plan-selected");
            $(this).parents("li").addClass("plan-selected");
        });

        //$('.list-group-submenu').removeClass('collapse').addClass('in collapse').css("height", "auto");

        $("#search-stocks").on("keyup", function () {
            $("#stocks-all > a").css("display", "none");
            $("#stocks-all > a + div").css("display", "none");
            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li").css("display", "none");

            $("#stocks-all > a + div:contains('" + $(this).val() + "')").css("display", '').removeClass('collapse').addClass('in collapse').prev("a").css("display", '');

            $("#stocks-all > a + div:contains('" + $(this).val() + "') .stocks-list > li:contains('" + $(this).val() + "')").css("display", '');
        });

        $("body").on("click", ".add-stock, .stock-box", function () {
            $("#stocks-selection .no-selection").hide();

            var $this = $(this);

            if ($(this).hasClass("stock-box")) {
                $this = $(this).find(".add-stock");
            }

            $this.parents(".stock-box").toggleClass("stock-toggle-selected");

            var stockName = $this.data("stock-name");
            var stockId = $this.data("stock-id");
            var marketName = $this.data("market-name");
            var marketId = $this.data("market-id");
            var stockPrice = $this.data("stock-price");
            var marketPrice = $this.data("market-price");

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
                            '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '" style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>'
                            );
                } else {
                    monthlyTotal = monthlyTotal + stockPrice + marketPrice;

                    if ($("#discount-marker").size() > 0) {
                        $("#discount-marker").before(
                                '<a id="market-' + marketId + '-marker" href="#market-' + marketId + '" class="added-stock list-group-item market-' + marketId + '" data-toggle="collapse" data-parent="#1"><span class="overflown-text"> إجمالي ' + marketName + '</span><span class="pull-right market-total-price" data-market-total-price="' + (stockPrice + marketPrice) + '" >' + (stockPrice + marketPrice) + '$</span></a>' +
                                '<div class="in collapse list-group-submenu" id="market-' + marketId + '">' +
                                '<a style="display: block;" data-parent="#1"><i class="fa fa-asterisk"></i>رسوم السوق المالي<span class="pull-right">' + marketPrice + '$</span></a>' +
                                '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '" style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>' +
                                '</div>'
                                );
                    } else {
                        $("#stocks-selection").append(
                                '<a id="market-' + marketId + '-marker" href="#market-' + marketId + '" class="added-stock list-group-item market-' + marketId + '" data-toggle="collapse" data-parent="#1"><span class="overflown-text">إجمالي ' + marketName + '</span><span class="pull-right market-total-price" data-market-total-price="' + (stockPrice + marketPrice) + '" >' + (stockPrice + marketPrice) + '$</span></a>' +
                                '<div class="in collapse list-group-submenu" id="market-' + marketId + '">' +
                                '<a style="display: block;" data-parent="#1"><i class="fa fa-asterisk"></i>رسوم السوق المالي<span class="pull-right">' + marketPrice + '$</span></a>' +
                                '<a id="stock-' + stockId + '" style="display: block;" class="stock" data-parent="#1"><i data-stock-name="' + stockName + '" data-stock-id="' + stockId + '" data-market-name="' + marketName + '" data-market-id="' + marketId + '" data-stock-price="' + stockPrice + '" style="margin-left: 3px;" class="fa fa-trash-o add-stock"></i><input type="hidden" name="selected_stocks[]" value="' + stockId + '" />' + stockName + '<span class="pull-right">' + stockPrice + '$</span></a>' +
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

                    $(this).html(basePrice + "$")
                });
            }

            $("#total-cart-value").text((monthlyTotal + totalDiscount) + "$");

            if (monthlyTotal + totalDiscount === 0) {
                $("#1-month-membership .total").text("-");
                $("#1-month-membership .monthly").text("-");

                $("#3-month-membership .total").text("-");
                $("#3-month-membership .monthly").text("-");

                $("#6-month-membership .total").text("-");
                $("#6-month-membership .monthly").text("-");

                $("#12-month-membership .total").text("-");
                $("#12-month-membership .monthly").text("-");

                $("#7-days-membership .total del").text("");
            } else {
                $("#7-days-membership .total del").text((monthlyTotal + totalDiscount) + "$");

                $("#1-month-membership .total").text((monthlyTotal + totalDiscount) + "$");
                $("#1-month-membership .monthly").text((monthlyTotal + totalDiscount) + "$ في الشهر");

                $("#3-month-membership .total").text(Math.ceil(((monthlyTotal + totalDiscount) * 75 / 100) * 3) + "$");
                $("#3-month-membership .monthly").text(((monthlyTotal + totalDiscount) * 75 / 100).toFixed(1) + "$ في الشهر");

                $("#6-month-membership .total").text(Math.ceil(((monthlyTotal + totalDiscount) * 65 / 100) * 6) + "$");
                $("#6-month-membership .monthly").text(((monthlyTotal + totalDiscount) * 65 / 100).toFixed(1) + "$ في الشهر");

                $("#12-month-membership .total").text(Math.ceil(((monthlyTotal + totalDiscount) * 55 / 100) * 12) + "$");
                $("#12-month-membership .monthly").text(((monthlyTotal + totalDiscount) * 55 / 100).toFixed(1) + "$ في الشهر");
            }

            return false;
        });

        introjs.onbeforechange(function (element) {
            var step = $(element).data("step");

            if (step === 3) {
                if (!$("#dubai").hasClass("in")) {
                    $("#step-2-interaction").click();
                }
            } else if (step === 4) {
                if (totalStocks === 0) {
                    $("#add-stock-dubai-0").click();
                    $("#add-stock-dubai-1").click();
                    $("#add-stock-dubai-3").click();
                    $("#add-stock-dubai-5").click();
                }
            } else if (step === 8) {
                if (!$("#saudi").hasClass("in")) {
                    $("#step-8-interaction").click();
                }
            } else if (step === 9) {
                $("#add-stock-saudi-0").click();
                $("#add-stock-saudi-1").click();
                $("#add-stock-saudi-3").click();
                $("#add-stock-saudi-5").click();
                $("#add-stock-saudi-7").click();
                $("#add-stock-saudi-8").click();
            }
        });

        introjs.onexit(function (element) {
            clearAll();
        });

        introjs.oncomplete(function (element) {
            clearAll();
        });

        introjs.start();

    });
</script>
@endsection