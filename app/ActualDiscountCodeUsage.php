<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActualDiscountCodeUsage extends Model
{
    protected $table = 'discount_code_usages';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 
        'membership_serial_no', 
        'date_used', 
        'membership_plan_instance_serial_no',
        'amount_discounted', 
    ];
}
