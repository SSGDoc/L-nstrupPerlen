<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'orderId', 'date', 'message', 'statusId', 'customerId'
    ];
}