<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'price', 'size', 'productImg', 'matId', 'catId', 'subCatId'
    ];
}