<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function allCart()
    {   
        $user = Auth::user();

        $cartItems = $user()->cartItems()->with("product")->get();

        return response()->json(["data" => $cartItems], 200);
    }

    public function cartById($id)
    {
        $item = CartItem::where("id", $id)->where("user_id", Auth::id())->with("product")->first();

        if (!$item) {
            return response()->json(["message" => "Cart tidak ditemukan"], 404);
        }

        return response()->json(["data" => $item], 200);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            "product_id" => "required|exists:products,id",
            "quantity" => "nullable|min:1",
        ]);

        $item = CartItem::where("user_id", Auth::id())->where("product_id", $request->product_id)->first();

        if ($item) {
            $item->quantity += $request->input("quantity", 1);
            $item->save();
        } else {
            $item = CartItem::create([
                "user_id" => Auth::id(),
                "product_id" => $request->product_id,
                "quantity" => $request->input("quantity", 1),
            ]);
        }

        return response()->json(["mesage" => "Produk berhasil ditambahkan ke dalam Cart", "item" => $item], 200);
    }

    public function removeFromCart($id)
    {
        $item = CartItem::where("id", $id)->where("user_id", Auth::id())->firstOrFail();
        $item->delete();

        return response()->json(["message" => "Produk dihapus dari cart"], 200);
    }
}
