<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipPlanInstance extends Model
{
    
    protected $table = 'membership_plans_instances';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'membership_plan_serial_no',
        'demo',
        'plan_price',
        'total_price',
        'discount',
        'consumed_points',
        'payment_reference',
        'monthly_fees',
        'monthly_fees_3_months',
        'monthly_fees_6_months',
        'monthly_fees_12_months',
        'monthly_fees_24_months',
        'membership_serial_no',
        'date_added',
        'start_date',
        'expire_date',
        'status',
        'period_in_days',
        'renewed_plan_instance_serial_no'
    ];

    public function details()
    {
        return $this->hasMany(MembershipPlanInstanceDetail::class, 'membership_plan_instance_serial_no');
    }
    public function markets()
    {
        return $this->belongsToMany(
            ActualStockMarket::class,
            'membership_plan_instance_details',
            'membership_plan_instance_serial_no',
            'stock_market_serial_no'
        );
    }

}
