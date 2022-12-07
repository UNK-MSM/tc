<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockClosingReading extends Model
{

	protected $casts = [
        'date_closed' => 'date'
    ];
    
    protected $dateFormat = 'd/m/Y H:i';
}
