<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class SubCatergory extends Model
{
    protected $fillable = [
        'subCatId', 'catId', 'subCatName', 'subCatDescription', 'subCatImg'
    ];
}