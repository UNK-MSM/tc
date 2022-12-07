@extends('portal.layouts.master')

@section('title', 'تفاصيل سهم ' . $stock->stock_name_ar)

@section('stylesheets')
    @parent

    <link href="{{ asset('portal/assets/pages/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('portal/assets/pages/css/select2-bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('portal/assets/pages/scripts/select2.full.min.js') }}"></script>
@endsection

@section('content')
    @include('portal.layouts.news_and_video')
    <div class="row stock-box" style="float: none;" data-stock-serial-no="{{ $stock->serial_no }}" data-stock-decimal-places="{{ $stock->stock_price_decimal_places }}">
        <div class="col-md-6">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span class="caption-subject bold uppercase font-dark">{{ $stock->stock_name_ar }}</span<!--&nbsp;|&nbsp;-->
                        <!--<a onclick="$(this).parents('.stock-box').find('.graph-toggle').click();">تفاصيل</a>-->
                    </div>
                </div>

                <div class="row" style="padding: 0 20px; margin-top: 10px;">
                    <span style="display: block; width: 26%" class="pull-left">
                        <label style="display: block; text-align: center; font-weight: bold;">الإغلاق السابق</label>
                        <span style="display: block; width: 100%; text-align: center;">
                            <span class="last-close-price" style="font-weight: bold">{{ $stock->open_selling_price }}</span>
                            &nbsp;<i class="icon-{{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'arrow-up': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'close' : 'arrow-down')}}" 
                            style="color: {{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'green': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'blue' : 'red')}}"></i>
                        </span>
                    </span>

                    <span style="display: block; width: 37%" class="pull-left">
                        <label style="display: block; text-align: center; font-weight: bold;">توقعنا</label>                        
                        <span style="display: block; width: 100%; text-align: center;">
                            <span style="font-weight: bold">{{ number_format(explode('-', $stock->closest_selling_price)[0], $stock->stock_price_decimal_places) }}</i></span>
                            &nbsp;<i class="icon-{{ explode('-', $stock->closest_selling_price)[0] > $stock->last_day_open_selling_price ? 'arrow-up': (explode('-', $stock->closest_selling_price)[0] == $stock->last_day_open_selling_price ? 'close' : 'arrow-down')}}" 
                            style="color: {{ explode('-', $stock->closest_selling_price)[0] > $stock->last_day_open_selling_price ? 'green': (explode('-', $stock->closest_selling_price)[0] == $stock->last_day_open_selling_price ? 'blue' : 'red')}}"></i><span class="hidden-xs hidden-sm hidden-md"> باحتمال</span> <span style="font-weight: bold">{{ round(explode('-', $stock->closest_selling_price)[1] * 100) }}%</span>
                        </span>
                    </span>

                    <span style="display: block; width: 37%" class="pull-left">
                        <label style="display: block; text-align: center; font-weight: bold;">الإغلاق التالي</label>                                        
                        <span style="display: block; width: 100%; text-align: center;">
                            <span class="prediction-price" style="font-weight: bold">{{ number_format(explode('-', $stock->current_prediction)[0], $stock->stock_price_decimal_places) }}</span>
                            &nbsp;<i class="icon-{{ explode('-', $stock->current_prediction)[0] > $stock->open_selling_price ? 'arrow-up' : (explode('-', $stock->current_prediction)[0] == $stock->open_selling_price ? 'close' : 'arrow-down')}}" 
                            style="color: {{ explode('-', $stock->current_prediction)[0] > $stock->open_selling_price ? 'green': (explode('-', $stock->current_prediction)[0] == $stock->open_selling_price ? 'blue' : 'red')}}"></i><span class="hidden-xs hidden-sm hidden-md"> باحتمال</span> <span style="font-weight: bold">{{ round(explode('-', $stock->current_prediction)[1] * 100) }}%</span>
                        </span>
                    </span>
                </div>
                <div class="portlet-body graph-view">
                    <div id="stock-{{$stock->serial_no}}-chart" class="CSSAnimationChart" style="direction: ltr;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="portlet light" style="height: 633.4px">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span class="caption-subject bold uppercase font-dark">تفاصيل التحليل</span>
                    </div>
                </div>

                <div class="portlet-body clearfix tabular-view">
                    <div class="table-scrollable col-sm-12" style="max-height: 500px; border: none;">
                        <table class="table table-bordered">
                            <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; margin-bottom: 15px; background-color: #f3f4f6; font-weight: bold">الاتجاه العام</caption>
                            <thead>
                                <tr>
                                    <th class="left-box" colspan="2" style="text-align: center"> ارتفاع </th>
                                    <th class="middle-box" colspan="2" style="text-align: center"> انخفاض </th>
                                    <th class="right-box" colspan="2" style="text-align: center"> استقرار </th>
                                </tr>
                                <tr>
                                    <th class="left-box" style="text-align: center"> احتمال </th>
                                    <th class="left-box" style="text-align: center"> سعر </th>

                                    <th class="middle-box" style="text-align: center"> احتمال </th>
                                    <th class="middle-box" style="text-align: center"> سعر </th>

                                    <th class="right-box" style="text-align: center"> احتمال </th>
                                    <th class="right-box" style="text-align: center"> سعر </th>
                                </tr>
                            </thead>
                            <tbody class="rates-tabular-tbody">
                                <tr>
                                    <td class="left-box tabular-rising-rate" style="text-align: center">-</td>
                                    <td class="left-box tabular-rising-price" style="text-align: center">-</td>

                                    <td class="middle-box tabular-falling-rate" style="text-align: center">-</td>
                                    <td class="middle-box tabular-falling-price" style="text-align: center">-</td>
                                    
                                    <td class="right-box tabular-stable-rate" style="text-align: center">-</td>
                                    <td class="right-box tabular-stable-price" style="text-align: center">-</td>
                                </tr>
                            </tbody>
                        </table>

                        <br />

                        <table class="table table-bordered">
                            <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; background-color: #f3f4f6; font-weight: bold">مخاطر السهم</caption>
                            <thead>
                                <tr>
                                    <th class="rising-total" style="text-align: center; width: 50%"> التكامل </th>
                                    <th class="falling-total" style="text-align: center"> المخاطر </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="rising-total total-rising-rate" style="text-align: center">-</td>
                                    <td class="falling-total total-falling-rate" style="text-align: center">-</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-hover table-bordered">
                        <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; background-color: #f3f4f6; font-weight: bold">التحليل</caption>
                            <tbody class="rates-tabular-tbody">
                                <tr>
                                    <td style="text-align: center">{!! $stock->final_result_text !!}<br /></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align: center; margin-top: 15px;"><a href='#operation-while-trading'" class="btn" style="text-decoration: underline">حركة السهم أثناء التداول</a>
                                    <a href="#urgent-expectations" class="btn">الاحتساب بناءً على الأسباب الطارئة</a></p>
                    </div>

                    <!--<div id="stock-{{$stock->serial_no}}-pie" class="CSSAnimationChart" style="direction: ltr; height: 315px; "></div>-->

                    <!--div class="table-scrollable col-sm-12" style="height: 305px; overflow-y: auto; border: none;">
                        <table class="table table-hover table-condensed" style="margin-left: 30px;">
                            <caption style="text-align: center; border-bottom: 1px dotted silver;">أسعار إغلاق السهم</caption>
                            <thead>
                                <tr>
                                    <th> التاريخ </th>
                                    <th> سعر الإغلاق </th>
                                </tr>urgent-expectations
                            </thead>
                            <tbody class="closing-readings-table">
                            </tbody>
                        </table>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span class="caption-subject bold uppercase font-dark">مستويات الارتفاع الممكنة</span>&nbsp;|&nbsp;
                        <span class="caption-subject bold uppercase font-dark">احتمال <span class="rising-most-rate" style="color: #158538">-</span> لغاية <span class="rising-most-value" style="color: #158538">-</span></span>
                    </div>
                    <div class="actions">
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-hover table-bordered">
                        <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; margin-bottom: 15px; background-color: #f3f4f6; font-weight: bold">احتمالات الإرتفاع المتكاملة</caption>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"> ارتفاع كبير </th>
                                <th colspan="2" style="text-align: center"> ارتفاع متوسط </th>
                                <th colspan="2" style="text-align: center"> ارتفاع محدود </th>
                            </tr>
                            <tr>
                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>

                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>

                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="rising-up-rate" class="tabular-rising-rate" style="text-align: center">-</td>
                                <td id="rising-up-price" class="tabular-rising-price" style="text-align: center">-</td>
                                
                                <td id="rising-mid-rate" class="tabular-stable-rate" style="text-align: center">-</td>
                                <td id="rising-mid-price" class="tabular-stable-price" style="text-align: center">-</td>

                                <td id="rising-down-rate" class="tabular-falling-rate" style="text-align: center">-</td>
                                <td id="rising-down-price" class="tabular-falling-price" style="text-align: center">-</td>
                            </tr>
                        </tbody>
                    </table>

                    <div id="stock-{{$stock->serial_no}}-chart-rise" class="CSSAnimationChart" style="direction: ltr;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span class="caption-subject bold uppercase font-dark">مستويات الانخفاض الممكنة</span>&nbsp;|&nbsp;
                        <span class="caption-subject bold uppercase font-dark">احتمال <span class="falling-most-rate" style="color: #E31B1B">-</span> لغاية <span class="falling-most-rate falling-most-value" style="color: #E31B1B">-</span></span>
                    </div>
                    <div class="actions">
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-hover table-bordered">
                        <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; margin-bottom: 15px; background-color: #f3f4f6; font-weight: bold">المخاطر</caption>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"> انخفاض كبير </th>
                                <th colspan="2" style="text-align: center"> انخفاض متوسط </th>
                                <th colspan="2" style="text-align: center"> انخفاض محدود </th>
                            </tr>
                            <tr>
                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>

                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>

                                <th style="text-align: center"> احتمال </th>
                                <th style="text-align: center"> سعر </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="falling-up-rate" class="tabular-rising-rate" style="text-align: center">-</td>
                                <td id="falling-up-price" class="tabular-rising-price" style="text-align: center">-</td>
                                
                                <td id="falling-mid-rate" class="tabular-stable-rate" style="text-align: center">-</td>
                                <td id="falling-mid-price" class="tabular-stable-price" style="text-align: center">-</td>

                                <td id="falling-down-rate" class="tabular-falling-rate" style="text-align: center">-</td>
                                <td id="falling-down-price" class="tabular-falling-price" style="text-align: center">-</td>
                            </tr>
                        </tbody>
                    </table>

                    <div id="stock-{{$stock->serial_no}}-chart-fall" class="CSSAnimationChart" style="direction: ltr;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span id="operation-while-trading" class="caption-subject bold uppercase font-dark">حركة السهم اثناء التداول</span>
                    </div>
                </div>
                <div class="portlet-body clearfix">
                    <div id="tabular-view" class="col-md-6">
                        <div class="row" style="padding: 0 20px; padding-right: 44px;">
                            <a id="show-down-vote" style="text-decoration: underline; color: blue !important;" onclick="$('#down-view').removeClass('hidden'); $('#tabular-view').addClass('hidden');">عرض حالات الانخفاض</a>
                        </div>

                        <div id="stock-{{$stock->serial_no}}-chart-daily-up" class="CSSAnimationChart" style="direction: ltr;"></div>
                        <table id="up-prices" class="table table-hover table-bordered">
                            <tr class="profit">
                                <td>نقاط ربح</td>
                                <td class="pos-1" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-2" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-3" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-4" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-5" style="color: green; text-align: center;">&nbsp;</td>
                                <!--<td class="pos-6" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-7" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-8" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-9" style="color: green; text-align: center;">&nbsp;</td>
                                <td class="pos-10" style="color: green; text-align: center;">&nbsp;</td>-->
                            </tr>
                            <tr class="loss">
                                <td>نقاط خسارة</td>
                                <td class="pos-1" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-2" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-3" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-4" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-5" style="color: red; text-align: center;">&nbsp;</td>
                                <!--<td class="pos-6" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-7" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-8" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-9" style="color: red; text-align: center;">&nbsp;</td>
                                <td class="pos-10" style="color: red; text-align: center;">&nbsp;</td>-->
                            </tr>
                        </table>
                    </div>

                    <div id="down-view" class="col-md-6 hidden">
                        <div class="row" style="padding: 0 20px; padding-right: 44px;">
                            <a id="show-up-vote" style="text-decoration: underline; color: blue !important;" onclick="$('#down-view').addClass('hidden'); $('#tabular-view').removeClass('hidden');">عرض حالات الارتفاع</a>
                        </div>

                        <div id="stock-{{$stock->serial_no}}-chart-daily-down" class="CSSAnimationChart" style="direction: ltr;"></div>
                            <table id="down-prices" class="table table-hover table-bordered">
                                <tr class="profit">
                                    <td>نقاط ربح</td>
                                    <td class="pos-1" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-2" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-3" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-4" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-5" style="color: green; text-align: center;">&nbsp;</td>
                                    <!--<td class="pos-6" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-7" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-8" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-9" style="color: green; text-align: center;">&nbsp;</td>
                                    <td class="pos-10" style="color: green; text-align: center;">&nbsp;</td>-->
                                </tr>
                                <tr class="loss">
                                    <td>نقاط خسارة</td>
                                    <td class="pos-1" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-2" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-3" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-4" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-5" style="color: red; text-align: center;">&nbsp;</td>
                                    <!--<td class="pos-6" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-7" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-8" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-9" style="color: red; text-align: center;">&nbsp;</td>
                                    <td class="pos-10" style="color: red; text-align: center;">&nbsp;</td>-->
                                </tr>
                            </table>
                    </div>

                    <div class="col-md-6">
                        <div class="row" style="padding: 0 20px; margin-bottom: 15px;">
                            <label>أدخل السعر الحالي&nbsp;&nbsp;<i class="up-arrow-animating side-view fa fa-chevron-up"><i class="fa fa-chevron-up"></i></i></label>
                            &nbsp;&nbsp;
                            <input id="daily-current-price" onchange="calculateDailyCurrentPrice();" class="form-control form-control-inline input-small" style="display: inline-block; width: 90px !important;" size="16" type="text" value="{{ $stock->open_selling_price }}" />
                            &nbsp;&nbsp;
                            <button class="btn" onclick="calculateDailyCurrentPrice();">تحديث</button>

                            &nbsp;&nbsp;&nbsp;&nbsp;

                            <div class="inline-in-responsive">
                                <label>المستوى المتوقع</label>
                                &nbsp;
                                <span class="predicted-daily-price" style="font-weight: bold">-</span>

                                &nbsp;&nbsp;
                                <label>الاحتمال</label>
                                &nbsp;
                                <span class="predicted-daily-probability" style="font-weight: bold">-</span>
                            </div>
                        </div>
                        
                        <table class="table table-bordered">
                            <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; margin-bottom: 15px; background-color: #f3f4f6; font-weight: bold">الاتجاه العام</caption>
                            <thead>
                                <tr>
                                    <th class="daily-left-box" colspan="2" style="text-align: center"> ارتفاع </th>
                                    <th class="daily-middle-box" colspan="2" style="text-align: center"> انخفاض </th>
                                    <th class="daily-right-box" colspan="2" style="text-align: center"> استقرار </th>
                                </tr>
                                <tr>
                                    <th class="daily-left-box" style="text-align: center"> احتمال </th>
                                    <th class="daily-left-box" style="text-align: center"> سعر </th>

                                    <th class="daily-middle-box" style="text-align: center"> احتمال </th>
                                    <th class="daily-middle-box" style="text-align: center"> سعر </th>

                                    <th class="daily-right-box" style="text-align: center"> احتمال </th>
                                    <th class="daily-right-box" style="text-align: center"> سعر </th>
                                </tr>
                            </thead>
                            <tbody class="rates-tabular-tbody">
                                <tr>
                                    <td class="daily daily-left-box tabular-rising-rate" style="text-align: center">-</td>
                                    <td class="daily daily-left-box tabular-rising-price" style="text-align: center">-</td>

                                    <td class="daily daily-middle-box tabular-falling-rate" style="text-align: center">-</td>
                                    <td class="daily daily-middle-box tabular-falling-price" style="text-align: center">-</td>
                                    
                                    <td class="daily daily-right-box tabular-stable-rate" style="text-align: center">-</td>
                                    <td class="daily daily-right-box tabular-stable-price" style="text-align: center">-</td>
                                </tr>
                            </tbody>
                        </table>

                        <br />

                        <table class="table table-bordered">
                            <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; background-color: #f3f4f6; font-weight: bold">مخاطر السهم</caption>
                            <thead>
                                <tr>
                                    <th class="daily-rising-total" style="text-align: center; width: 50%">التكامل</th>
                                    <th class="daily-falling-total" style="text-align: center"> المخاطر </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="daily-rising-total daily-rising-rate" style="text-align: center">-</td>
                                    <td class="daily-falling-total daily-falling-rate" style="text-align: center">-</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-hover table-bordered">
                        <caption style="text-align: center; border-bottom: 1px dotted silver; color:  black; background-color: #f3f4f6; font-weight: bold">التحليل</caption>
                            <tbody class="rates-tabular-tbody">
                                <tr>
                                    <td id="daily-analysis-results" style="text-align: center"></td>
                                </tr>
                            </tbody>
                        </table>

                        <p style="text-align: center; margin-top: 15px;"><a href="#urgent-expectations" class="btn">الاحتساب بناءً على الأسباب الطارئة</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span id="urgent-expectations" class="caption-subject bold uppercase font-dark">الاحتساب بناءً على الأسباب الطارئة</span>
                    </div>
                    <div class="actions">
                    </div>
                </div>
                <div class="portlet-body clearfix">
                    <div class="row" style="padding: 0 20px;">
                        <label>السبب الطارئ</label>
                        <select id="urgent-cause-selection" class="form-control form-control-->serial_noinline" style="display: inline-block; width: 250px !important; padding: 2px;">
                            <option value="0">إختر السبب الطارئ</option>
                            @foreach ($urgent_causes as $urgent_cause)
                            <option value="{{ $urgent_cause->serial_no }}" data-positive-effect="{{ $urgent_cause->positive_effect }}" data-description="{{ $urgent_cause->description_ar }}">{{ $urgent_cause->label_ar }}</option>
                            @endforeach
                        </select>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="inline-in-responsive">
                            <label>توقع النظام</label>
                            &nbsp;&nbsp;
                            <span class="system-urgent-prediction">-</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="stock-urgent-chart" class="CSSAnimationChart" style="direction: ltr;"></div>
                    </div>

                    <div class="col-md-6">
                        <h4>التحليل&nbsp;<i id="analysis-indicator" class="up-arrow-animating fa fa-chevron-up"><i class="fa fa-chevron-up"></i></i></h4>
                        <p id="urgent-cause-analysis" style="border: 1px solid #eee; padding: 5px; text-align: justify; line-height: 28px;">-</p>

                        <h4 style="margin-top: 50px;">وصف السبب الطارئ<span id="urgent-cause-label"></span></h4>
                        <p id="urgent-cause-description" style="border: 1px solid #eee; padding: 5px; text-align: justify; line-height: 28px;">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        var urgentChartData = [];
        var urgentChart;

        loadChartData({{ $stock->serial_no }}, true , true, function(data) {
            urgentChartData = $.extend(true, [], data).previousReadings;

            /*var risingRate = (data.resultsAnalysis.predicted_up_price_rate_out * 100).toFixed(2);
            var risingAmount = (data.nextReading[0].predicted_rising_selling_closing_price).toFixed(2);

            var fallingRate = (data.resultsAnalysis.predicted_down_price_rate_out * 100).toFixed(2);
            var fallingAmount = (data.nextReading[0].predicted_falling_selling_closing_price).toFixed(2);*/

            urgentChartData[urgentChartData.length - 1].predicted_rising_selling_closing_price = urgentChartData[urgentChartData.length - 1].close_selling_price;
            urgentChartData[urgentChartData.length - 1].predicted_stable_selling_closing_price = urgentChartData[urgentChartData.length - 1].close_selling_price;
            urgentChartData[urgentChartData.length - 1].predicted_falling_selling_closing_price = urgentChartData[urgentChartData.length - 1].close_selling_price;
            
            var today = new Date(urgentChartData[urgentChartData.length - 1].date_closed);

            urgentChartData[urgentChartData.length] = {"date_closed": moment(urgentChartData[urgentChartData.length - 1].date_closed, 'DD/MM/YYYY').add(1, 'days').format('DD/MM/YYYY')};

            urgentChartData[urgentChartData.length] = {"date_closed": moment(urgentChartData[urgentChartData.length - 1].date_closed, 'DD/MM/YYYY').add(1, 'days').format('DD/MM/YYYY')};

            urgentChartData[urgentChartData.length - 2].bulletClass = "lastBullet";

            var risingLabel = "احتمال أن يرتفع السهم لغاية [[predicted_rising_selling_closing_price]]";
            var fallingLabel = "احتمال أن ينخفض السهم لغاية [[predicted_falling_selling_closing_price]]";

            urgentChart = generateChart("stock-urgent-chart", 
                                        urgentChartData, 
                                        "bulletClass", 
                                        "bulletClass", 
                                        "bulletClass", 
                                        risingLabel, 
                                        undefined, 
                                        fallingLabel);
        }, {{ $stock->stock_price_decimal_places }});

        function calculateDailyCurrentPrice() {
            var decimalPlaces = $(".stock-box").data("stock-decimal-places");

            doCalculateDailyCurrentPrice(decimalPlaces);
        }

        function doCalculateDailyCurrentPrice(decimalPlaces) {
            if (doCalculateDailyCurrentPrice.busy === true) {
                return;
            }

            doCalculateDailyCurrentPrice.busy = true;

            if (decimalPlaces === undefined) {
                decimalPlaces = 2;
            }

             $.ajax({
                        url: "{{ asset('') }}portal/api/stocksDailyCalculations/{{ $stock->serial_no }}",
                        method: "GET",
                        data: {
                            'stock_price': $("#daily-current-price").val()
                        },
                        dataType: "json"
                    }).done(function(data) {
                        doCalculateDailyCurrentPrice.busy = false;

                        $("#daily-analysis-results").html(data.resultsAnalysis.message_ar);
                        $(".daily.daily-left-box.tabular-rising-rate").html(Math.round(data.resultsAnalysis.predicted_up_price_rate_out * 100) + '%');
                        $(".daily.daily-middle-box.tabular-falling-rate").html(Math.round(data.resultsAnalysis.predicted_down_price_rate_out * 100) + '%');
                        $(".daily.daily-right-box.tabular-stable-rate").html(Math.round(data.resultsAnalysis.predicted_stable_price_rate_out * 100) + '%');

                        $(".daily.daily-left-box.tabular-rising-price").html(data.resultsAnalysis.predicted_up_price_out.toFixed(decimalPlaces));
                        $(".daily.daily-middle-box.tabular-falling-price").html(data.resultsAnalysis.predicted_down_price_out.toFixed(decimalPlaces));
                        $(".daily.daily-right-box.tabular-stable-price").html(data.resultsAnalysis.predicted_stable_price_out.toFixed(decimalPlaces));

                        $(".daily-rising-rate").html(Math.round(data.resultsAnalysis.rising_rate) + '%');
                        $(".daily-falling-rate").html(Math.round(data.resultsAnalysis.falling_rate) + '%');

                        $(".daily-left-box").css("background-color", "rgba(255, 255, 255, 0.2)");
                        $(".daily-right-box").css("background-color", "rgba(255, 255, 255, 0.2)");
                        $(".daily-middle-box").css("background-color", "rgba(255, 255, 255, 0.2)");

                        var chosenRate = 0;
                        var chosenValue = 0;

                        if (data.resultsAnalysis.predicted_up_price_rate_out >= data.resultsAnalysis.predicted_stable_price_rate_out &&
                            data.resultsAnalysis.predicted_up_price_rate_out >= data.resultsAnalysis.predicted_down_price_rate_out) {
                            chosenRate = data.resultsAnalysis.predicted_up_price_rate_out;
                            chosenValue = data.resultsAnalysis.predicted_up_price_out;

                            $("#show-up-vote").click();

                            $(".daily-left-box").css("background-color", "rgba(0, 255, 0, 0.2)");
                        } else if (data.resultsAnalysis.predicted_stable_price_rate_out >= data.resultsAnalysis.predicted_up_price_rate_out &&
                            data.resultsAnalysis.predicted_stable_price_rate_out >= data.resultsAnalysis.predicted_down_price_rate_out) {
                            chosenRate = data.resultsAnalysis.predicted_stable_price_rate_out;
                            chosenValue = data.resultsAnalysis.predicted_stable_price_out;
                            
                            $(".daily-right-box").css("background-color", "rgba(0, 0, 255, 0.2)");
                        } else if (data.resultsAnalysis.predicted_down_price_rate_out >= data.resultsAnalysis.predicted_up_price_rate_out &&
                            data.resultsAnalysis.predicted_down_price_rate_out >= data.resultsAnalysis.predicted_stable_price_rate_out) {
                            chosenRate = data.resultsAnalysis.predicted_down_price_rate_out;
                            chosenValue = data.resultsAnalysis.predicted_down_price_out;
                            
                            $("#show-down-vote").click();

                            $(".daily-middle-box").css("background-color", "rgba(255, 0, 0, 0.2)");
                        }

                        $(".predicted-daily-price").text(Number(chosenValue).toFixed(decimalPlaces));
                        $(".predicted-daily-probability").text(Math.round(chosenRate * 100) + "%");

                        if (data.resultsAnalysis.rising_rate > data.resultsAnalysis.falling_rate) {
                            $(".daily-rising-total").css("background-color", "rgba(0, 255, 0, 0.2)");
                            $(".daily-falling-total").css("background-color", "rgba(255, 255, 255, 0.2)")
                        } else {
                            $(".daily-falling-total").css("background-color", "rgba(255, 0, 0, 0.2)");
                            $(".daily-rising-total").css("background-color", "rgba(255, 255, 255, 0.2)");
                        }

                        var dailyDataUp = [];
                        var dailyDataDown = [];

                        var stockDaily = [];

                        $.each(data.stockDaily, function(key, value) {
                            stockDaily[stockDaily.length] = value;
                        });

                        var profitLossIndex = 0;

                        for (var i = 9; i >= 0; i--) {
                            var value = stockDaily[i];
                            var stockDetails = value.prediction.split("-");

                            /*if (Number($("#daily-current-price").val()).toFixed(decimalPlaces) === value.price.toFixed(decimalPlaces)) {
                                $(".predicted-daily-price").text(Number(stockDetails[0]).toFixed(decimalPlaces));
                                $(".predicted-daily-probability").text(Math.round(Number(stockDetails[1]) * 100) + "%");
                            }*/

                            if (Number(stockDetails[0]) > value.price) {
                                $("#down-prices .profit td.pos-" + (profitLossIndex + 1)).text(value.price.toFixed(decimalPlaces));
                                $("#down-prices .loss td.pos-" + (profitLossIndex + 1)).html('<i class="icon-arrow-up" style="color: black"></i>');
                            } else {
                                $("#down-prices .profit td.pos-" + (profitLossIndex + 1)).html('<i class="icon-arrow-down" style="color: black"></i>');
                                $("#down-prices .loss td.pos-" + (profitLossIndex + 1)).text(value.price.toFixed(decimalPlaces));
                            }

                            profitLossIndex += 1;

                            dailyDataDown.push({
                                "category": value.price.toFixed(decimalPlaces),
                                "closing_reading": value.price.toFixed(decimalPlaces),
                                "prediction":  Number(stockDetails[0]).toFixed(decimalPlaces),
                                "color": Number(stockDetails[0]) > value.price ? "green" : "red",
                                "center_axis_color": Number($("#daily-current-price").val()).toFixed(decimalPlaces) === value.price.toFixed(decimalPlaces) ? "red" : undefined
                            });
                        }

                        profitLossIndex = 0;

                        for (var i = 9; i <= 18; i++) {
                            var value = stockDaily[i];
                            var stockDetails = value.prediction.split("-");

                            /*if (Number($("#daily-current-price").val()).toFixed(decimalPlaces) === value.price.toFixed(decimalPlaces)) {
                                $(".predicted-daily-price").text(Number(stockDetails[0]).toFixed(decimalPlaces));
                                $(".predicted-daily-probability").text(Math.round(Number(stockDetails[1]) * 100) + "%");
                            }*/

                            if (Number(stockDetails[0]) > value.price) {
                                $("#up-prices .profit td.pos-" + (profitLossIndex + 1)).html(value.price.toFixed(decimalPlaces));
                                $("#up-prices .loss td.pos-" + (profitLossIndex + 1)).html('<i class="icon-arrow-up" style="color: black"></i>');
                            } else {
                                $("#up-prices .profit td.pos-" + (profitLossIndex + 1)).html('<i class="icon-arrow-down" style="color: black"></i>');
                                $("#up-prices .loss td.pos-" + (profitLossIndex + 1)).html(value.price.toFixed(decimalPlaces));
                            }

                            profitLossIndex += 1;

                            dailyDataUp.push({
                                "category": value.price.toFixed(decimalPlaces),
                                "closing_reading": value.price.toFixed(decimalPlaces),
                                "prediction":  Number(stockDetails[0]).toFixed(decimalPlaces),
                                "color": Number(stockDetails[0]) > value.price ? "green" : "red",
                                "center_axis_color": Number($("#daily-current-price").val()).toFixed(decimalPlaces) === value.price.toFixed(decimalPlaces) ? "red" : undefined
                            });
                        }

                        generateDailyGraph("stock-{{$stock->serial_no}}-chart-daily-up", dailyDataUp);
                        generateDailyGraph("stock-{{$stock->serial_no}}-chart-daily-down", dailyDataDown);
                    });
        }

        function generateDailyGraph(id, data) {
            AmCharts.makeChart(id, {
                        "type": "serial",
                        "theme": "light",
                        "autoMarginOffset":0,
                        "dataProvider": data,
                        "valueAxes": [{
                            "axisAlpha": 0,
                            "guides": [{
                                "fillAlpha": 0.1,
                                "fillColor": "#888888",
                                "lineAlpha": 0,
                                "toValue": 16,
                                "value": 10
                            }],
                            "position": "left",
                            "tickLength": 0
                        }],
                        "graphs": [{
                            "balloonText": "سعر السهم [[closing_reading]]",
                            "bullet": "round",
                            "lineThickness": 2,
                            "valueField": "closing_reading"
                        },{
                            "balloonText": "السعر المتوقع [[prediction]]",
                            "bullet": "round",
                            "lineThickness": 2,
                            "colorField":"color",
                            "valueField": "prediction"
                        }],
                        "trendLines": [],
                        "chartScrollbar": {
                            "scrollbarHeight":2,
                            "offset":-1,
                            "backgroundAlpha":0.1,
                            "backgroundColor":"#888888",
                            "selectedBackgroundColor":"#67b7dc",
                            "selectedBackgroundAlpha":1
                        },
                        "chartCursor": {
                            "fullWidth":true,
                            "valueLineEabled":true,
                            "valueLineBalloonEnabled":true,
                            "valueLineAlpha":0.5,
                            "cursorAlpha":0
                        },
                        "valueAxes": [
                            {
                                "id": "ValueAxis-1",
                                "autoRotateAngle": 0,
                                "axisAlpha": 0.6,
                                "labelsEnabled": true,
                                "title": "المستوى المتوقع"
                            }
                        ],
                        "categoryField": "category",
                        "categoryAxis": {
                            "labelColorField": "center_axis_color",
                            "autoRotateAngle": 0,
                            "autoRotateCount": 0,
                            "gridPosition": "start",
                            "axisAlpha": 0.6,
                            "axisThickness": 1,
                            "tickLength": 1,
                            "title": "السعر أثناء التداول",
                            "titleRotation": 0
                        },
                        "export": {
                            "enabled": true
                         }
                    });
        }

        $(document).ready(function() {
            $("#urgent-cause-selection").select2({
                 placeholder: "إختر السبب",
                 allowClear: true,
                 width: "250px"
            });

            var decimalPlaces = $(".stock-box").data("stock-decimal-places");

            calculateDailyCurrentPrice();

            $("#urgent-cause-selection").on("change", function () {
                var newUrgentCause = $(this).find(":selected").val();
                var positiveEffect = $(this).find(":selected").data("positive-effect") == "1"; 
                var description = $(this).find(":selected").data("description");

                $("#urgent-cause-description").html(description);

                var $this = $(this);

                if (newUrgentCause !== 0) {
                    $.ajax({
                        url: "{{ asset('') }}portal/api/stocksUrgentCausePrediction/{{ $stock->serial_no }}/" + newUrgentCause,
                        method: "GET",
                        dataType: "json"
                    }).done(function(data) {
                        $(".system-urgent-prediction").html(data.prediction.toFixed(decimalPlaces));

                        urgentChartData[urgentChartData.length - 2].predicted_rising_selling_closing_price = undefined;
                        urgentChartData[urgentChartData.length - 2].predicted_stable_selling_closing_price = undefined;
                        urgentChartData[urgentChartData.length - 2].predicted_falling_selling_closing_price = undefined;

                        if (positiveEffect) {
                            $("#analysis-indicator").removeClass("down-arrow").addClass("up-arrow");
                            urgentChartData[urgentChartData.length - 2].predicted_rising_selling_closing_price = data.prediction.toFixed(decimalPlaces);
                        } else {
                            $("#analysis-indicator").removeClass("up-arrow").addClass("down-arrow");
                            urgentChartData[urgentChartData.length - 2].predicted_falling_selling_closing_price = data.prediction.toFixed(decimalPlaces);
                        }

                        $("#urgent-cause-label").text(" - " + $this.find(":selected").text());

                        $("#urgent-cause-analysis").html('إذا كان السهم فعلاً تحت تأثير <span style="color: ' + (positiveEffect > 0 ? "green" : "red") + '">' +  $this.find(":selected").text() + '</span> فإن السهم <span style="color: ' + (positiveEffect > 0 ? "green" : "red") + '">' + (positiveEffect ? 'يرتفع' : 'ينخفض') + '</span> إلى مستوى <span style="color: ' + (positiveEffect > 0 ? "green" : "red") + '">' + data.prediction.toFixed(decimalPlaces) + '</span>');

                        urgentChart.validateData();
                    });
                }
                /*urgentData.splice(10, 2);

                var predictedValue = (4.12 - Math.random()).toFixed(2);
                
                urgentData.push({
                    "date": "22/11/2015",
                    "predictedFallingClosing": predictedValue,
                    "fallingPercent": 20,
                    "bulletClass": "lastBullet",
                    "description": "ينخفض"
                });
                
                $("#urgent-exact").val(predictedValue);
            
                amChart.validateData();*/

                $(this).select2("close");
            });
        });
    </script>
@endsection