<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
<<<<<<< HEAD
{   
    protected $table = "product";
    protected $fillable = [
        "product_name",
        "stoct",
        "price",
        "description",
        "category",
        "image",
=======
{
    protected $table = 'product';
    protected $fillable = [
        'product_name',
        'stock',
        'price',
        'category',
        'image',
>>>>>>> refs/remotes/origin/mamantube
    ];
}
