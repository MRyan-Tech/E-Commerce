<?php

// kategori.php

function hitungBMI($beratBadan, $tinggiBadan) {
    $tinggiMeter = $tinggiBadan / 100; // Konversi tinggi badan ke meter
    return $beratBadan / ($tinggiMeter ** 2);
}

function kategoriBMI($bmi) {
    if ($bmi < 18.5) {
        return "kurus";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        return "sedang";
    } else {
        return "gemuk";
    }
}

// Inputan variabel
$nama = "John Doe"; // Ganti sesuai input
$tinggiBadan = 170; // Tinggi badan dalam cm
$beratBadan = 65; // Berat badan dalam kg

// Perhitungan
$bmi = hitungBMI($beratBadan, $tinggiBadan);
$kategori = kategoriBMI($bmi);

// Output
echo "Halo, $nama. Nilai BMI anda adalah " . number_format($bmi, 2) . ", anda termasuk $kategori.";

?>