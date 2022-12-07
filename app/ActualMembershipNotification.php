<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActualMembershipNotification extends Model
{
    protected $table = 'membership_notifications';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_serial_no', 
        'body_en', 
        'body_ar', 
        'param_1',
        'param_2',
        'user_serial_no',
        'stock_serial_no', 
        'stock_market_serial_no'
    ];
    
}
