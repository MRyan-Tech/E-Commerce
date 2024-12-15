<?php

function lusaPersegiPanjang($panjang, $lebar) {
    $hasil = $panjang * $lebar;
    echo "Luas Persegi Panjang <br/> $panjang X $lebar = $hasil <br/><br/>";
}

function luasSegitiga($alas, $tinggi) {
    $hasil = 1/2 * $alas * $tinggi;
    echo "Luas Segitiga<br/> 1/2 X $alas X $tinggi = $hasil <br/><br/>";
}

function volumeKubus($sisi) {
    $hasil = pow($sisi, 3);
    echo "Volume Kubus<br/> $sisi X $sisi X $sisi = $hasil <br/><br/>";
}

function volumeBalok($panjang, $lebar, $tinggi) {
    $hasil = $panjang * $lebar * $tinggi;
    echo "Volume Balok<br/> $panjang X $lebar X $tinggi = $hasil <br/><br/>";
}

function volumePrisma($panjang, $lebar, $tinggi) {
    $hasil = 1/2 * $panjang * $lebar * $tinggi;
    echo "Volume Prisma<br/> 1/2 X $panjang X $lebar X $tinggi = $hasil";
}

lusaPersegiPanjang(10, 20);
luasSegitiga(6, 8);
volumeKubus(5);
volumeBalok(10, 4, 6);
volumePrisma(12, 6, 4);
?>