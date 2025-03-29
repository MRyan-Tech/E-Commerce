<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'tbl_antrian';

    protected $fillable = ['tanggal', 'no_antrian', 'status', 'tujuan'];

    public $timestamps = false;

    protected $casts = [
        'status' => 'integer',  // Cast status sebagai integer
        'tujuan' => 'string',   // Cast ENUM sebagai string
    ];

    // Konstanta ENUM untuk tujuan agar lebih aman
    const TUJUAN_RUANG_DOKTER_UMUM = 'Ruang Dokter Umum';
    const TUJUAN_RUANG_DOKTER_GIGI = 'Ruang Dokter Gigi';
    const TUJUAN_RUANG_KEBIDANAN= 'Ruang Kebidanan';

    // Fungsi untuk mendapatkan daftar tujuan yang valid
    public static function getDaftarTujuan()
    {
        return [
            self::TUJUAN_RUANG_DOKTER_UMUM,
            self::TUJUAN_RUANG_DOKTER_GIGI,
            self::TUJUAN_RUANG_KEBIDANAN
        ];
    }
}
