<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        try {
            $request->validate([
                "product_name" => "required|string|max:100",
                "stock" => "required|integer",
                "price" => "required|integer",
                "description" => "required|string",
                "category" => "required|string",
                "image" => "required|image|mimes:jpeg,png,jpg|max:2064",

            ]);

            $publicPatch = public_path("assets/img/products/");
            if(!file_exists($publicPatch)) {
                mkdir($publicPatch, 077, true);
            }

            if($request->hasFile("image")) {
                $extention = $request->file("image")->getClientOriginalExtension();
                $filename = time() . "-" . uniqid() . "." . $extention;

                $path = $request->file("image")->move($publicPatch, $filename);

                $imageUrl = "/assets/img/products/" . $filename;
            }

            // $imagePath = $request->file("image")->store("products", "public/assets");

            $product = Product::create([
                "product_name" => $request->product_name,
                "stock" => $request->stock,
                "price" => $request->price,
                "description" => $request->description,
                "category" => $request->category,
                "image" => $imageUrl,
            ]);

            return response()->json(["message" => "product berhasil ditambahkan", "data" => $product], 201);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()]);
        };
    }

    public function allProducts(Request $request)
    {
        try {
            $products = Product::all();

            return response()->json(["data" => $products], 200);
        } catch (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }

    public function product($id)
    {
        try {
            $product = Product::where("id", $id)->whereNull("deleted_at")->firstOrFail();

            if (!$product) {
                return response()->json(["message" => "Produk tidak ditemukan"]);
            }

            return response()->json(["data" => $product], 200);
        } catch (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }

    public function updateProduct(Request $request, $id)
    {
        try {
            $request->validate([
               "product_name" => "sometimes|required|string|max:100",
                "stock" => "sometimes|required|integer",
                "price" => "sometimes|required|integer",
                "description" => "sometimes|required|string",
                "category" => "sometimes|required|string",
                "image" => "sometimes|image|mimes:jpeg,png,jpg|max:2064",
            ]);

            $product = Product::findOrFail($id);

            $product->update([
                "product_name" => $request->product_name,
                "stock" => $request->stock,
                "price" => $request->price,
                "description" => $request->description,
                "category" => $request->category,
            ]);

            if ($request->hasFile("image")) {
                $imagePath = $request->file("image")->store("products", "public");
                $product->image = $imagePath;
            }

            $product->save();

            return response()->json(["message" => "Data produk diperbaharui", "data" => $product], 200);
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
