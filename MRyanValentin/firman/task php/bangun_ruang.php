<?php  
    $sisi = 6;
    $panjang = 12;
    $lebar = 7;
    $tinggi = 5;
    $rumusVolumeKubus = pow($sisi, 3);
    $rumusVolumeBalok = $panjang * $lebar * $tinggi;
    $rumusVolumePrisma = 1/2 * $panjang * $lebar * $tinggi;

echo "Volume kubus <br/>" . $sisi . " X ". $sisi . " X ". $sisi . " = " . $rumusVolumeKubus . "<br/><br/>";
echo "Volume balok <br/>" . $panjang . " X ". $lebar . " X ". $tinggi . " = " . $rumusVolumeBalok . "<br/><br/>";
echo "Volume kubus <br/> 1/2 X " . $panjang . " X ". $lebar . " X ". $tinggi . " = " . $rumusVolumePrisma . "<br/><br/>";

?>