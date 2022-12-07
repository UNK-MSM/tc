<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $table = 'v_news';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial_no', 
        'title_en', 
        'title_ar', 
        'body_en', 
        'body_ar', 
        'added_date', 
        'related_stock_serial_no', 
        'related_stock_market_serial_no'
    ];

}
