<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productt extends Model
{
    protected $fillable = [
        'title',
        'product_code',
        'description',
       ];
}
