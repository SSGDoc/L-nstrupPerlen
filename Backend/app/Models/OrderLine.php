<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $fillable = [
        'oderLineId', 'amount', 'subTotal', 'productId', 'orderId'
    ];
}