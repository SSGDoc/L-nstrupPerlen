<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'productId', 'price', 'size', 'productImg', 'matId', 'catId', 'subCatId'
    ];
}