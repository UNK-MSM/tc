@extends('portal.layouts.master')

@section('title', 'الرئيسة')

@section('content')
    @include('portal.layouts.news_and_video')

    <div class="row">
        @foreach ($stocks as $stock)
        <div class="col-md-6 col-sm-12 stock-box stock-market-{{ $stock->stock_market_serial_no }}" style="margin-bottom: 1px;" data-stock-serial-no="{{ $stock->serial_no }}" data-stock-decimal-places="{{ $stock->stock_price_decimal_places }}" data-charts-loaded="false" style="max-height: 640px; overflow: hidden;">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />
                        <span class="caption-subject bold uppercase font-dark">{{ $stock->stock_name_ar }}</span>&nbsp;|&nbsp;
                        <a href="{{ asset('portal/stock/' . $stock->serial_no) }}">تحليل السهم</a>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default view-toggler graph-toggle" data-toggle-from="graph" data-toggle-to="tabular" title="عرض الجدول">
                            <i class="icon-list"></i>
                        </a>

                        <a class="btn btn-circle btn-icon-only btn-default view-toggler tabular-toggle hidden" data-toggle-from="tabular" data-toggle-to="graph" title="عرض الرسم البياني">
                            <i class="icon-graph"></i>
                        </a>
                    </div>
                </div>

                <div class="row" style="padding: 0 20px; margin-top: 10px;">
                    <input type="hidden" value="{{ date('Y-m-d', strtotime('-7 days')) }}" />

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label>الإغلاق السابق</label>
                    &nbsp;
                    <span class="last-close-price" style="font-weight: bold">{{ $stock->open_selling_price }}</span>
                    &nbsp;<i class="icon-{{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'arrow-up': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'close' : 'arrow-down')}}" 
                    style="color: {{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'green': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'blue' : 'red')}}"></i>

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label>توقعنا</label>
                    &nbsp;
                    <span style="font-weight: bold">{{ number_format(explode('-', $stock->closest_selling_price)[0], $stock->stock_price_decimal_places) }}</i></span>
                    &nbsp;<i class="icon-{{ explode('-', $stock->closest_selling_price)[0] > $stock->last_day_open_selling_price ? 'arrow-up': (explode('-', $stock->closest_selling_price)[0] == $stock->last_day_open_selling_price ? 'close' : 'arrow-down')}}" 
                    style="color: {{ explode('-', $stock->closest_selling_price)[0] > $stock->last_day_open_selling_price ? 'green': (explode('-', $stock->closest_selling_price)[0] == $stock->last_day_open_selling_price ? 'blue' : 'red')}}"></i><span class="hidden-xs hidden-sm hidden-md"> باحتمال</span> <span style="font-weight: bold">{{ number_format(explode('-', $stock->closest_selling_price)[1] * 100, $stock->stock_price_decimal_places) }}%</span>

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label>الإغلاق التالي<span class="hidden-xs hidden-sm hidden-md"> المتوقع</span></label>
                    &nbsp;
                    <span class="prediction-price" style="font-weight: bold">{{ number_format(explode('-', $stock->current_prediction)[0], $stock->stock_price_decimal_places) }}</span>
                    &nbsp;<i class="icon-{{ explode('-', $stock->current_prediction)[0] > $stock->open_selling_price ? 'arrow-up' : (explode('-', $stock->current_prediction)[0] == $stock->open_selling_price ? 'close' : 'arrow-down')}}" 
                    style="color: {{ explode('-', $stock->current_prediction)[0] > $stock->open_selling_price ? 'green': (explode('-', $stock->current_prediction)[0] == $stock->open_selling_price ? 'blue' : 'red')}}"></i><span class="hidden-xs hidden-sm hidden-md"> باحتمال</span> <span style="font-weight: bold">{{ number_format(explode('-', $stock->current_prediction)[1] * 100, $stock->stock_price_decimal_places) }}%</span>
                </div>

                <div class="portlet-body graph-view">
                    <div id="stock-{{$stock->serial_no}}-chart" class="CSSAnimationChart" style="direction: ltr;"></div>
                </div>

                <div class="portlet-body clearfix tabular-view hidden">
                    <div class="table-scrollable col-sm-12" style="max-height: 500px; border: none;">
                        <table class="table table-hover table-condensed">
                            <caption style="text-align: center; border-bottom: 1px dotted silver;">مستوى الإغلاق المتوقع</caption>
                            <thead>
                                <tr>
                                    <th> الاتجاه </th>
                                    <th> الاحتمال </th>
                                    <th> السعر </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> ارتفاع </td>
                                    <td class="tabular-rising-rate"></td>
                                    <td class="tabular-rising-price"></td>
                                </tr>
                                <tr>
                                    <td> استقرار </td>
                                    <td class="tabular-stable-rate"></td>
                                    <td class="tabular-stable-price"></td>
                                </tr>
                                <tr>
                                    <td> انخفاض </td>
                                    <td class="tabular-falling-rate"></td>
                                    <td class="tabular-falling-price"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-scrollable col-sm-12" style="height: 305px; overflow-y: auto; border: none;">
                        <table class="table table-hover table-condensed" style="margin-left: 30px;">
                            <caption style="text-align: center; border-bottom: 1px dotted silver;">أسعار إغلاق السهم</caption>
                            <thead>
                                <tr>
                                    <th> التاريخ </th>
                                    <th> سعر الإغلاق </th>
                                </tr>
                            </thead>
                            <tbody class="closing-readings-table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            refreshBlocksVisibility();
            $(document).on("scroll", function(event) {
                refreshBlocksVisibility();
            });
        });

        function refreshBlocksVisibility() {
            var doc = document.documentElement;

            var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

            $(".stock-box").each(function(key, box) {
                var boxTop = $(box).offset().top;

                if (boxTop > top - 800 && boxTop < top + 800 && $(box).data("charts-loaded") === false) {
                    $(box).data("charts-loaded", true);
                    loadChartData($(box).data("stock-serial-no"), undefined, undefined, undefined, $(box).data("stock-decimal-places"));
                }
            });
        }
    </script>
@endsection