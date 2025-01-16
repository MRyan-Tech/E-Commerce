<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        "name",
        "price",
        "category",
        "description",
        "qty",

    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
