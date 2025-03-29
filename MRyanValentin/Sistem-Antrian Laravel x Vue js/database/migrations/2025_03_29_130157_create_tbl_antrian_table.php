<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use Carbon\Carbon;

class AntrianController extends Controller
{
    // Ambil jumlah antrian terakhir
    public function index()
    {
        $jumlah_antrian = Antrian::whereDate('tanggal', Carbon::today())->count();
        return response()->json(['jumlah_antrian' => $jumlah_antrian]);
    }

    // Tambah nomor antrian
    public function store()
    {
        try {
            $nomorTerakhir = Antrian::whereDate('tanggal', Carbon::today())->max('no_antrian') ?? 0;
            $nomorBaru = $nomorTerakhir + 1;

            $antrian = new Antrian();
            $antrian->tanggal = Carbon::today();
            $antrian->no_antrian = $nomorBaru;
            $antrian->status = '0';
            $antrian->save();

            return response()->json(['message' => 'Sukses', 'no_antrian' => $nomorBaru]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal', 'error' => $e->getMessage()], 500);
        }
    }
}
