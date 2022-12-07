<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\MarqueeContent;
use App\News;

class NewsController extends ProtectedController
{

    public function getMarqueeContents()
    {
    	$marqueeContents = MarqueeContent::all();

        return response()->json($marqueeContents, 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

    public function getNews(Request $request)
    {
    	$start_at = $request->input('startAt', 0);
    	$fetch_count = $request->input('fetchCount', 3);
        
    	$related_stock_serial_no = $request->input('relatedStockSerialNo', 0);
    	$related_stock_market_serial_no = $request->input('relatedStockMarketSerialNo', 0);

    	$newsQuery = News::select('serial_no', 'title_en', 'title_ar', 'body_en', 'body_ar', 'added_date', 'related_stock_serial_no', 'related_stock_market_serial_no', 'logo')
                                    ->skip($start_at)
                                    ->take($fetch_count)
                                    ->orderBy('added_date', 'desc');

        if ($related_stock_serial_no != 0) 
        {
            $newsQuery->where('related_stock_serial_no', $related_stock_serial_no);
        }

        if ($related_stock_market_serial_no != 0) 
        {
            $newsQuery->where('related_stock_market_serial_no', $related_stock_market_serial_no);
        }

        $news = $newsQuery->get();

        return response()->json($news, 200, array('Content-Type' => 'application/json; charset=UTF-8'), JSON_UNESCAPED_UNICODE);
    }

}
