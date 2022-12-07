<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipNotification extends Model
{
    protected $table = 'v_membership_notifications';

    protected $primaryKey = 'serial_no';
}
