<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    
    protected $table = 'memberships';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial_no',
        'user_serial_no', 
        'membership_plan_serial_no', 
        'membership_type_serial_no',
        'by_referral_member_serial_no',
        'referral_got_rewarded',
        'status',
        'activation_token',
        'membership_activated',
        'source'
    ];

    public function plans()
    {
        return $this->hasMany(MembershipPlanInstance::class, 'membership_serial_no');
    }

}
