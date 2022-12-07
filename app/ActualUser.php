<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActualUser extends Model
{
    
    protected $table = 'users';

    protected $primaryKey = 'serial_no';

    protected $fillable = [
        'full_name', 
        'username', 
        'password',  
        'referral_link',
        'user_type_serial_no',
        'user_status_serial_no',
        'email',
        'mobile_no',
        'remember_token', 
        'country_serial_no'
    ];
    
}
