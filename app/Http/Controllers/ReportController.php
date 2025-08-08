<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index']);
    }

    public function index(Request $request)
    {
        $report = DB::table('order_details')
            ->join('products', 'products.id', '=', 'order_details.id_produk')
            ->select(
                DB::raw('
                nama_barang,
                COUNT(*) as jumlah_dibeli,
                harga,
                SUM(total) as pendapatan,
                SUM(jumlah) as total_qty'))
                ->whereDate('order_details.created_at', '>=', $request->dari)
                ->whereDate('order_details.created_at', '<=', $request->sampai)
            ->groupBy('id_produk', 'nama_barang', 'harga')
            ->get(); // Menampilkan 10 data per halaman

        return response()->json([
            'data' => $report
        ]);
    }
}
