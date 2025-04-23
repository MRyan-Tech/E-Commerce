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

            $per_page = $request->get("per_page", 8);
            $search = $request->get("search");

            $query = Product::query();

            if ($search) {
                $query->where("product_name", "like", "%" . $search . "%")->orWhere("description", "like", "%" . $search. "%" );
            }

            $products = $query->paginate($per_page);

            return response()->json([
                "data" => $products->items(),
                "meta" => [
                    "current_page" => $products->currentPage(),
                    "from" => $products->firstItem(),
                    "last_page" => $products->lastPage(),
                    "per_page" => $products->perPage(),
                    "to" => $products->lastItem(),
                    "total" => $products->total(),
                ],
                "links" => [
                    "first" => $products->url(1),
                    "last" => $products->url($products->lastPage()),
                    "prev" => $products->previousPageUrl(),
                    "next" => $products->nextPageUrl(),
                ]
                ], 200);


            // $products = Product::all();
            // return response()->json(["data" => $products], 200);
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

}
