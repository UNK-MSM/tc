<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipPlanInstanceDetail extends Model
{
    
    protected $table = 'membership_plan_instance_details';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'membership_plan_instance_serial_no',
        'stock_market_serial_no',
        'stock_serial_no',
        'item_actual_price',
        'optional_discount_rate',
        'date_added' 
    ];

}
