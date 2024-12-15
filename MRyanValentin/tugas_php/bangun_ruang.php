<?php

function volumeKubus($sisi) {
    return $sisi ** 3;
}

function volumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}

function volumeTabung($radius, $tinggi) {
    return pi() * $radius ** 2 * $tinggi;
}
echo "Volume Kubus dengan sisi 3: " . volumeKubus(3) . "<br>";
echo "Volume Balok dengan panjang 5, lebar 3, dan tinggi 2: " . volumeBalok(5, 3, 2) . "<br>";
echo "Volume Tabung dengan radius 7 dan tinggi 10: " . volumeTabung(7, 10) . "<br>";

?>
