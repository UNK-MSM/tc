<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipInstance extends Model
{
    protected $table = 'v_member_memberships';

    protected $primaryKey = 'serial_no';
}
