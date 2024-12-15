<?php
function luasPersegi($sisi) {
    return $sisi * $sisi;
}
function luasLingkaran($jariJari) {
    return pi() * $jariJari * $jariJari;
}
function volumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}
function volumeKubus($sisi) {
    return pow($sisi, 3); // Sisi pangkat 3
}
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}
// Menggunakan fungsi untuk menghitung luas dan volume
echo "Luas Persegi: " . luasPersegi(4) . " cm²<br>";  // Sisi 4 cm
echo "Luas Lingkaran: " . luasLingkaran(7) . " cm²<br>";  // Jari-jari 7 cm
echo "Volume Balok: " . volumeBalok(4, 5, 6) . " cm³<br>";  // Panjang, lebar, tinggi 4x5x6 cm
echo "Volume Kubus: " . volumeKubus(3) . " cm³<br>";  // Sisi 3 cm
echo "Luas Segitiga: " . luasSegitiga(6, 8) . " cm²<br>";  // Alas 6 cm, tinggi 8 cm

?>
