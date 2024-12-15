<?php

$array = file_get_contents('data.json'); // memanggil data dari json 
$data = json_decode($array, true); // mengubah json menjadi array 
// function untuk hitung umur 
function hitungUmur($tanggal_lahir) { // memanggil tanggal lahir dari data json
    $tanggalLahir = new DateTime($tanggal_lahir); // variabel definisi tanggal lahir
    $tahunLahir = $tanggalLahir->format('Y'); // variabel definisi tahun lahir
    $tahunSekarang = (new DateTime())->format('Y'); // Variabel untuk mengambil tahun sekarang
    $umur = $tahunSekarang - $tahunLahir; // rumus tahun lahir di kurangi tahun sekarang atau tahun 2024 -tgl lahir 
    return $umur; // mengembalikan umur
}
// function untuk menentukan kategori nilai menjadi hasil dalam huruf 
function hasil($nilai) { // memanggil nilai dari data json
    if ($nilai >= 90) { // jika nilai lebih besar sama dengan 90 
        return "A";// maka nilai nya A
    } elseif ($nilai >= 80) { //jika nilai lebih besar sama dengan 80
        return "B"; // maka nilai nya B
    } elseif ($nilai >= 70) { //jika nilai lebih besar sama dengan 70
        return "C";// maka nilai nya C
    } else { // jika tidak lebih besar sama dengan 70
        return "D"; // maka nilai nya D
    }
}

// tabel header data 
echo "<table border='1' cellspacing='2' cellpadding='5'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>";
// tabel row data 
$no = 1; // penomoran auto increment
foreach ($data as $item) {  // meanggil data dari json yang sudah di definisikan menjadi $item 
    $umur = hitungUmur($item['tanggal_lahir']); 
    $Hasil = hasil($item['nilai']); 
// menampilkan tabel data untuk setiap kolom 
    echo "<tr>"; 
    echo "<td> " . $no++ . " </td>"; 
    echo "<td>{$item['nama']}</td>"; // dari data.json
    echo "<td>{$item['tanggal_lahir']}</td>"; // dari data.json
    echo "<td>{$umur}</td>"; // dari function hitungUmur yang sudah didefinisikan variabel$umur
    echo "<td>{$item['alamat']}</td>"; // dari data.json
    echo "<td>{$item['kelas']}</td>"; // dari data.json
    echo "<td>{$item['nilai']}</td>"; // dari data.json
    echo "<td>{$Hasil}</td>"; // dari function hasil yang sudah didefinisikan variabel $Hasil
    echo "</tr>";
}
echo "</table>";
?>
