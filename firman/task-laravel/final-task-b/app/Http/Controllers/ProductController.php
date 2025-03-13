<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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

        public function allProducts() {
            try {
                $products = Product::all();
                return response()->json(["data" => $products], 200);
            } catch (Exception $e) {
                return response()->json(["message" => $e->getMessage()], 400);

            }
        
    }

        
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'product_name' => 'required|string|max:255',
    //         'stock' => 'required|integer',
    //         'price' => 'required|numeric',
    //         'category' => 'required|string|max:255',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:128',
    //     ]);

    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         $namaFile = time() . '_' . $request->file('image')->getClientOriginalName();

    //         // Check if running on Railway
    //         if (env('RAILWAY_ENVIRONMENT', false)) {
    //             $destinationPath = '/tmp/uploads'; // Writable path on Railway
    //         } else {
    //             $destinationPath = public_path('uploads'); // Local development path
    //         }

    //         // Ensure directory exists
    //         if (!file_exists($destinationPath)) {
    //             mkdir($destinationPath, 0777, true);
    //         }

    //         // Move the file
    //         $request->file('image')->move($destinationPath, $namaFile);

    //         // Save only the relative path for retrieval
    //         $imagePath = env('RAILWAY_ENVIRONMENT', false) ? "/tmp/uploads/$namaFile" : "uploads/$namaFile";
    //     }

    //     $product = Product::create([
    //         'product_name' => $request->product_name,
    //         'stock' => $request->stock,
    //         'price' => $request->price,
    //         'category' => $request->category,
    //         'image' => $imagePath,
    //     ]);
    //     return response()->json($product);
    // }

    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return response()->json($product);
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'product_name' => 'required|string|max:255',
    //         'stock' => 'required|integer',
    //         'price' => 'required|numeric',
    //         'category' => 'required|string|max:255',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $product = Product::findOrFail($id);
    //     $product->update([
    //         'product_name' => $request->product_name,
    //         'stock' => $request->stock,
    //         'price' => $request->price,
    //         'category' => $request->category,
    //         'image' => $request->image,
    //     ]);
    //     return response()->json($product);
    // }

    // public function destroy($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->delete();
    //     return response()->json(['message' => 'Product deleted successfully'], 200);
    // }
}
