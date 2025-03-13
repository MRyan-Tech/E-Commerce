<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts() 
    {
        $data = Product::all();
        return response()->json($data);
    }

    public function addProdutc(Request $request) 
    {
        try {
            $request->validate([
                "product_name" => "required|string|max:100",
                "stock" => "required|integer",
                "price" => "required|float",
                "description" => "required|string",
                "category" => "required|string",
                "image" => "required|image|mimes:jpeg,png,jpg|max:2064",

            ]);

            $product = Product::create([
                "product_name" => $request->product_name,
                "stoct" => $request->stock,
                "price" => $request->price,
                "description" => $request->description,
                "category" => $request->category,
                "image" => $request->image,
            ]);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()]);
        };
    }

    public function updateProduct() {
        
    }
}
