<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AddProduct (Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "price" => ["required", "integer"],
            "category" => ["required", "string"],
            "qty" => ["required", "integer"],
            "description" => ["required", "string"],
            "qty" => ["required", "integer"],
            "storage_id" => ["required", "exists:storages,id"]

        ]);

        // $product = Product::create($validated);
        // return response()->json($product, 201);
    }
}
