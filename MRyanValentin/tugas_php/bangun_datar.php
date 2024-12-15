<?php
function luasPersegi($sisi) {
    return $sisi * $sisi;
}

function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

function luasLingkaran($radius) {
    return pi() * $radius * $radius;
}

function luasTrapesium($sisiA, $sisiB, $tinggi) {
    return 0.5 * ($sisiA + $sisiB) * $tinggi;
}

echo "Luas Persegi dengan sisi 10 adalah " . luasPersegi(10) . "<br>";
echo "Luas Persegi Panjang dengan panjang 5 dan lebar 3 adalah " . luasPersegiPanjang(5, 3) . "<br>";
echo "Luas Segitiga dengan alas 6 dan tinggi 4 adalah " . luasSegitiga(6, 4) . "<br>";
echo "Luas Lingkaran dengan radius 7 adalah " . luasLingkaran(7) . "<br>";
echo "Luas Trapesium dengan sisi A=8, sisi B=6, dan tinggi 5 adalah " . luasTrapesium(8, 6, 5) . "<br>";

?>