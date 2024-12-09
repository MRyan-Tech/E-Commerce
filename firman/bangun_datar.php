<?php 
    $sisi = 4;
    $lebar = 6;
    $panjang = 5;
    $tinggi = 7;
    $alas = 10;
    $jariJari = 8;
    $pi = 3.14;
    $rumusLuasPersegi = $sisi * $sisi;
    $rumusLuasPersegiPanjang = $panjang * $lebar;
    $rumusLuasSegitiga = 1/2 * $alas * $tinggi;
    $rumusLuasJajargenjang = $alas * $tinggi;
    $rumusLuasLingkaran = $pi * 8 * 8;

 echo "Luas persegi <br/>". $sisi. " X ". $sisi. " = ". $rumusLuasPersegi. "<br/><br/>";
 echo "Luas persegi panjang <br/>". $panjang. " x ". $lebar. " = ". $rumusLuasPersegiPanjang. "<br/><br/>";
 echo "Luas segitiga <br/> 1/2 X ". $alas . " X ". $tinggi. " = ". $rumusLuasSegitiga. "<br/><br/>";
 echo "Luas Jajargenjang <br/>". $alas . " X ". $tinggi. " = ". $rumusLuasJajargenjang. "<br/><br/>";
 echo "Luas Lingkaran <br/>". $pi . " X ". $jariJari. " X ". $jariJari. " = ". $rumusLuasJajargenjang. "<br/><br/>";

 ?>