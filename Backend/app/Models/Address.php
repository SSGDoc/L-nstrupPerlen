<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'zip', 'road', 'number', 'addressId'
    ];
}