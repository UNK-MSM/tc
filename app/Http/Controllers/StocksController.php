<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Stock;
use App\StockMarket;
use App\StockClosingReading;
use App\StockUrgentCalculation;

class StocksController extends ProtectedController
{
    public function getStocks()
    {
    	$stocks = Stock::select('serial_no', 'stock_name_en', 'stock_name_ar', 'stock_symbol')->get();

        return response()->json($stocks, 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function getMarkets()
    {
        $stocks = Stock::select('serial_no', 'stock_name_en', 'stock_name_ar')->get();

        return response()->json($stocks, 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function getStockClosingReadings(Request $request, $stock_serial_no)
    {
        //$start_date = $request->input('start_date');

        $nextStockReading = StockClosingReading::select('date_closed', 
                                                        'predicted_rising_selling_closing_price',
                                                        'predicted_stable_selling_closing_price', 
                                                        'predicted_falling_selling_closing_price', 
                                                        'predicted_rising_selling_closing_price_rate',
                                                        'predicted_stable_selling_closing_price_rate', 
                                                        'predicted_falling_selling_closing_price_rate',
                                                        'predicted_rising_selling_closing_price',
                                                        'predicted_stable_selling_closing_price', 

                                                        'top_positive_rate', 
                                                        'top_positive_value', 
                                                        'mid_positive_rate', 
                                                        'mid_positive_value', 
                                                        'bottom_positive_rate', 
                                                        'bottom_positive_value', 
                                                        'top_negative_rate', 
                                                        'top_negative_value', 
                                                        'mid_negative_rate', 
                                                        'mid_negative_value', 
                                                        'bottom_negative_rate', 
                                                        'bottom_negative_value', 
                                                        
                                                        'top_positive_rate',
                                                        'mid_positive_rate',
                                                        'bottom_positive_rate', 
                                                        'top_positive_value',
                                                        'mid_positive_value',
                                                        'bottom_positive_value',
                                                        'top_negative_rate',
                                                        'mid_negative_rate',
                                                        'bottom_negative_rate', 
                                                        'top_negative_value',
                                                        'mid_negative_value',
                                                        'bottom_negative_value')
                                    ->whereNull('close_selling_price')
                                    ->where('stock_serial_no', $stock_serial_no)
                                    ->take(1)
                                    ->get();

        $start_date = date('Y-m-d', strtotime('-10 days' , strtotime($nextStockReading[0]->date_closed->toDateTimeString())));//max(strtotime($start_date), strtotime('-14 days')));

    	$stockClosingReadings = StockClosingReading::select('date_closed', 'close_selling_price')
    								->where('date_closed', '>', $start_date)
                   					->whereNotNull('close_selling_price')
    								->where('close_selling_price', '>', '0')
    								->where('stock_serial_no', $stock_serial_no)
					                ->orderBy('serial_no', 'asc')
					                ->get();

        return response()->json(array('previousReadings' => $stockClosingReadings, 'nextReading' => $nextStockReading), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function stockUrgentCausePrediction($stock_serial_no, $urgent_cause_serial_no) {
        /*
        * Should Check that User can Predict for this Stock
        */

        DB::select('call predict_stock_urgent_price(?, ?, NULL, 1, @predicted_closing_price)',array($stock_serial_no,$urgent_cause_serial_no));

        $result = DB::select('SELECT @predicted_closing_price as predicted_closing_price');

        return response()->json(array('prediction' => $result[0]->predicted_closing_price), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function getStockUrgentCalculations($stock_serial_no) {
        $stockUrgentCauses = StockUrgentCalculation::select('serial_no', 'positive_effect', 'label_ar', 'label_en')
                                    ->where('stock_serial_no', $stock_serial_no)
                                    ->get();

        return response()->json(array('stockUrgentCauses' => $stockUrgentCauses), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);                          

    }

    public function getStockDailyCalculations(Request $request, $stock_serial_no) {
        $stock_last_price = DB::select('select get_stock_last_selling_price(?, NOW(), 0) as last_price', [$stock_serial_no])[0]->last_price;

        $stock_price = $request->input('stock_price', $stock_last_price);

        $rate = (($stock_price * 1.05) - $stock_price) / 5;
        
        $results = DB::select('select price, prediction '.
                'from (select n as sorting, ? + ? * n as price, get_best_stock_instant_prediction_result(?, NOW(), ? + ? * n) as prediction '.
                'from generator_16 '.
                'where n < 10 '.

                'union all '.

                'select -1 * n as sorting, ? - ? * n as price, get_best_stock_instant_prediction_result(?, NOW(), ? - ? * n) as prediction '.
                'from generator_16 '.
               ' where n < 10 AND n <> 0) a '.
                'order by sorting', [$stock_price, 
                                     $rate, 
                                     $stock_serial_no, 
                                     $stock_price, 
                                     $rate, 
                                     $stock_price, 
                                     $rate, 
                                     $stock_serial_no, 
                                     $stock_price, 
                                     $rate]);

        $finalResults = DB::select('CALL get_stock_instant_final_result_no(?, NOW(), ?)', [$stock_serial_no, $stock_price]);

        return response()->json(array('stockDaily' => $results, 'resultsAnalysis' => $finalResults[0]), 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);    

    }
}
