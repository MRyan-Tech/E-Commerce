<?php 
    $nama = "Joko";
    $beratBadan = 150;
    $tinggiBadan = 167;
    $rumusBMI = $beratBadan / pow(($tinggiBadan / 100), 2);
    $hasilBMI = number_format($rumusBMI, 1);

    
    if ($hasilBMI < 18.5) {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori mengalami kurang berat badan";
    } elseif ($hasilBMI < 23 ) {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori memiliki berat badan ideal";
    } elseif ($hasilBMI < 25) {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori mengalami berat badan berlebih";
    } elseif($hasilBMI < 30) {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori mengalami obesitas tingkat 1";
    } elseif ($hasilBMI < 40) {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori mengalami obesitas tingkat 2";
    } else {
        echo "Hai " . $nama . " hasil BMI anda adalah " . $hasilBMI . " anda termasuk kategori mengalami obesitas tingkat 3";
    };
    
 ?>