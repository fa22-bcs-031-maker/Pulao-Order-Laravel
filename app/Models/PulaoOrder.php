<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PulaoOrder extends Model
{
    //This will Save the Fileds in the DB of Pulao Order
    protected $fillable = [
        'customer_name',
        'address',
        'plate_type',
        'quantity',
        'total_price'
    ];
}
