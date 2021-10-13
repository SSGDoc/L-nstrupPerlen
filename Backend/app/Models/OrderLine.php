<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $fillable = [
        'oderLineId', 'amount', 'subTotal', 'productId', 'orderId'
    ];
}