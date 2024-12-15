<?php
// DISINI SAYA MEMBUAT KONEKSI KE DATABASE LALU MEMBUAT QUERY MENAMPILKAN DATA DAN MENJOINKAN TABEL //

$host = "localhost";
$username = "root";
$password = "";
$database = "perpus"; // ini database perpus.sql dari eduwork

$conn = mysqli_connect($host, $username, $password, $database); // masukan variabel di atas 

if ($conn) { // jika koneksi berhasil
    echo "Connected <br>"; // maka akan tampil "Connected"
} else { // jika koneksi gagal
    echo "Not Connected" ; // maka akan tampil "Not Connected"
}
// Query untuk menampilkan anggota yang pernah melakukan peminjaman
$sql = "SELECT a.id_anggota, a.nama, a.telp, p.tgl_pinjam 
        FROM anggota a 
        JOIN peminjaman p ON a.id_anggota = p.id_anggota 
        ORDER BY a.id_anggota ASC"; //berdasarkan id_anggota tampil secara ascending atau dari yang terkecil
        
$result = $conn->query($sql); // eksekusi query 

// Hasil Output
if ($result->num_rows > 0) {// jika ada data 
    while($row = $result->fetch_assoc()) {// maka akan tampil data dengan while
        echo "ID: " . $row["id_anggota"]. " - Nama: " . $row["nama"]. " - Telepon: " . $row["telp"] . " - Tanggal Pinjam: " . $row["tgl_pinjam"] . "<br>";
    }
} else {
    echo "0 results"; // jika tidak ada data maka akan tampil "0 results"
}

?>
