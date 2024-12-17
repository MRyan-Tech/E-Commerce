<?php
// DISINI SAYA MEMBUAT KONEKSI KE DATABASE PERPUS //
$host = "localhost";
$username = "root";
$password = "";
$database = "perpus"; // ini database perpus.sql dari eduwork

$conn = mysqli_connect($host, $username, $password, $database); // masukan variabel di atas 

if ($conn) { // jika koneksi berhasil
    echo " <br>"; // maka akan tampil "Connected"
} else { // jika koneksi gagal
    echo "Not Connected" ; // maka akan tampil "Not Connected"
}

?>
