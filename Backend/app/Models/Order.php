<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'orderId', 'date', 'message', 'statusId', 'customerId'
    ];
}