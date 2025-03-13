<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table = "product";
    protected $fillable = [
        "product_name",
        "stoct",
        "price",
        "description",
        "category",
        "image",
    ];
}
