<?php 
    $nama = "Joko";
    $jenisKelamin = "Perempuan";
    $tanggalLahir = 1993;
    $umur = date("Y") - $tanggalLahir;

    if ($jenisKelamin == "Laki-Laki") {
        echo "halo tuan ". $nama . " Selamat datang <br/> umur anda " . $umur . " tahun";
    } else {
        echo "halo madam ". $nama . " Selamat datang <br/> umur anda " . $umur . " tahun";
    };

?>