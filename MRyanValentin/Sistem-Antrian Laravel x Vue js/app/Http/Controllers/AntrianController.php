<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function index()
    {
        $jumlah_antrian = Antrian::whereDate('tanggal', Carbon::today())->count();
        return response()->json(['jumlah_antrian' => $jumlah_antrian]);
    }
    public function store(Request $request)
    {
        $no_antrian = Antrian::whereDate('tanggal', Carbon::today())->max('no_antrian') + 1;
        $tujuan = $request->input('tujuan');

        $antrian = Antrian::create([
            'tanggal' => Carbon::today()->format('Y-m-d'),
            'no_antrian' => $no_antrian,
            'status' => '0', // ✅ Gunakan string
            'tujuan' => $tujuan
        ]);

        return response()->json([
            'message' => 'Sukses',
            'no_antrian' => $antrian->no_antrian,
            'tujuan' => $antrian->tujuan,
            'tanggal' => $antrian->tanggal
        ]);
    }




    public function getAntrianList()
{
    $antrian = Antrian::orderBy('no_antrian', 'asc')->get();
    return response()->json($antrian);
}

public function updateAntrian(Request $request, $id)
{
    $antrian = Antrian::findOrFail($id);
    $antrian->update(['status' => '1']);

    return response()->json(['message' => 'Antrian telah dipanggil']);
}

// public function getAntrianList()
// {
//     $antrian = Antrian::orderBy('no_antrian', 'asc')->get();
//     return response()->json($antrian);
// }

// public function updateAntrian(Request $request, $id)
// {
//     $antrian = Antrian::findOrFail($id);
//     $antrian->update(['status' => '1']);

//     return response()->json(['message' => 'Antrian telah dipanggil']);
// }

}
