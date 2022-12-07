@extends('portal.layouts.master')

@section('title', 'أسهمي')

@section('content')
    @include('portal.layouts.news_and_video')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <!--
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-bubbles font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">الأسعار المتوقعة عند الإغلاق في المسار العادي</span>
                    </div>
                </div>-->
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                        <tbody>
                            @foreach ($markets as $market)
                            <tr class="stock-record-market-{{ $market->serial_no }} stock-record-market stock-base-record">
                                <td colspan="6" style="text-align: center; font-weight: bold; background-color: #126d9b; color: white;">{{ $market->label_ar }}: أسعار الإغلاق المتوقعة ليوم</td>
                            </tr>
                            <tr class="stock-record-market-{{ $market->serial_no }} stock-record-market">
                                <th class="all">السهم</th>
                                <th class="min-phone-l">احتمال الارتفاع</th>
                                <th class="min-tablet">احتمال الانخفاض</th>
                                <th class="none">احتمال الثبات</th>
                                <th class="min-phone-l">الإغلاق السابق</th>
                                <!--<th class="min-phone-l">التحليل السابق</th>-->
                            </tr>
                            @foreach ($stocks as $stock)
                            @if ($stock->stock_market_serial_no == $market->serial_no)
                            <tr class="stock-record stock-record-market-{{ $stock->stock_market_serial_no }}" data-date-closed="{{ $stock->previous_date_closed }}">
                                <td><a href="stock/{{ $stock->serial_no }}"><img onerror="loadAlternativeImage(this);" height="35" width="35" src="{{ '/tcps/public/img/logo/d/' . $stock->logo }}" />&nbsp;<span class="hidden-responsive">{{ $stock->stock_name_ar }}</span><span class="shown-responsive">{{ $stock->stock_symbol }}</span></a></td>
                                <td style="{{ $stock->predicted_rising_selling_closing_price_rate 
                                    > $stock->predicted_falling_selling_closing_price_rate && $stock->predicted_rising_selling_closing_price_rate
                                    > $stock->predicted_stable_selling_closing_price_rate ? "color: green;" : ""  }}">{{ round($stock->predicted_rising_selling_closing_price_rate * 100) }}% <span class="hidden-responsive">ارتفاع لغاية</span> {{ round($stock->predicted_rising_selling_closing_price, $stock->stock_price_decimal_places) }}

                                    <i class="icon-arrow-up" style="{{ $stock->predicted_rising_selling_closing_price_rate 
                                    > $stock->predicted_falling_selling_closing_price_rate && $stock->predicted_rising_selling_closing_price_rate
                                    > $stock->predicted_stable_selling_closing_price_rate ? "" : "display: none;"  }}"></i>
                                    </td>
                                <td style="{{ $stock->predicted_falling_selling_closing_price_rate 
                                    > $stock->predicted_rising_selling_closing_price_rate && $stock->predicted_falling_selling_closing_price_rate
                                    > $stock->predicted_stable_selling_closing_price_rate ? "color: red;" : ""  }}">{{ round($stock->predicted_falling_selling_closing_price_rate * 100) }}% <span class="hidden-responsive">انخفاض لغاية</span> {{ round($stock->predicted_falling_selling_closing_price, $stock->stock_price_decimal_places) }}

                                    <i class="icon-arrow-down" style="{{ $stock->predicted_falling_selling_closing_price_rate 
                                    > $stock->predicted_rising_selling_closing_price_rate && $stock->predicted_falling_selling_closing_price_rate
                                    > $stock->predicted_stable_selling_closing_price_rate ? "" : "display: none;"  }}"></i>
                                    </td>
                                <td style="{{ $stock->predicted_stable_selling_closing_price_rate
                                    > $stock->predicted_rising_selling_closing_price_rate && $stock->predicted_stable_selling_closing_price_rate
                                    > $stock->predicted_falling_selling_closing_price_rate  ? "color: blue;" : ""  }}">{{ round($stock->predicted_stable_selling_closing_price_rate * 100) }}% <span class="hidden-responsive">عند</span> {{ round($stock->predicted_stable_selling_closing_price, $stock->stock_price_decimal_places) }}

                                    <i class="icon-close" style="{{ $stock->predicted_stable_selling_closing_price_rate
                                    > $stock->predicted_rising_selling_closing_price_rate && $stock->predicted_stable_selling_closing_price_rate
                                    > $stock->predicted_falling_selling_closing_price_rate  ? "" : "display: none;"  }}"></i>
                                    </td>
                                <td>
<i class="icon-{{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'arrow-up': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'close' : 'arrow-down')}}" 
                    style="color: {{ $stock->open_selling_price > $stock->last_day_open_selling_price ? 'green': ($stock->open_selling_price == $stock->last_day_open_selling_price ? 'blue' : 'red')}}"></i>


                                {{ round($stock->open_selling_price, $stock->stock_price_decimal_places) }}</td>
                                <!--<td>
                                    <a style="color: blue !important; text-decoration: underline; text-align: center;" onclick="showPreviousPrediction('{{ $stock->previous_result_text }}');">التحليل السابق</a>
                                </td>-->
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
@endsection

@section('javascript')
    <script type="text/javascript">
        function showPreviousPrediction(text) {
            bootbox.alert({
                message: text === ''? 'لا يوجد توقع' : text,
                buttons: {
                            ok: {
                            label: 'إغلاق'
                         }
                    }
                });
        }

        $(document).ready(function() {
             $(".stock-base-record").each(function() {
             	var stockClass = $(this).prop("class").replace(" stock-record-market stock-base-record", "");


                var nextElement = $(this).next();
                var mostDate = 0;


             	$("." + stockClass + ".stock-record").each(function() {
             		var nextElement = $(this);
             		
             		var dateToSet = nextElement.data("date-closed");
                    var d = new Date(dateToSet);
                    var currentDate = d.getTime();

                    if (currentDate > mostDate) {
                        mostDate = currentDate;
                    }
             	});
                
                var d = new Date(mostDate);

                var months = ['يناير','فبراير','مارس','أبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'],
                      days = ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعة','السبت'];

                var toDisplay = days[d.getDay()] + '، ' + d.getDate() + ' ' +months[d.getMonth()] + ' ' + d.getFullYear();

                $(this).find("td").append(" " + toDisplay);
            });
        });
    </script>
@endsection