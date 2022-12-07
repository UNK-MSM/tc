<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActualDiscountCode extends Model
{
    protected $table = 'discount_codes';

    protected $primaryKey = 'serial_no';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 
        'redemption_times', 
        'max_redemption_times'];
}
