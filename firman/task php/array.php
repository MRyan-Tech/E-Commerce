<?php 
$dataJSON = file_get_contents('data.json');

$persons = json_decode($dataJSON, true);
$number = 1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Array</title>
</head>
<body>
    <h1 style="display: flex; justify-content: center;">Task Binding Array</h1>

    <div class="table-data" style="display: flex; justify-content: center;">
        <table border= 1 style="border-collapse: collapse; text-align: center;">
            <tr style="margin: 2px 3px; background-color: lime;">
                <th style="padding: 10px 12px;">No</th>
                <th style="padding: 10px 12px;">Nama</th>
                <th style="padding: 10px 12px;">Tanggal Lahir</th>
                <th style="padding: 10px 12px;">Umur</th>
                <th style="padding: 10px 12px;">Alamat</th>
                <th style="padding: 10px 12px;">Kelas</th>
                <th style="padding: 10px 12px;">Nilai</th>
                <th style="padding: 10px 12px;">Hasil</th>
            </tr>
            <?php foreach($persons as $person) : ?>
                <tr>
                    <td style="padding: 10px 12px;">
                        <?= $number++ ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?= $person["nama"]; ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?= $person["tanggal_lahir"]; ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?php
                            $tanggalLahir = new DateTime($person["tanggal_lahir"]);
                            $tanggalHariIni = new DateTime();
                            $usia = $tanggalLahir->diff($tanggalHariIni)->y;
                            echo $usia;
                         ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?= $person["alamat"]; ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?= $person["kelas"]; ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?= $person["nilai"]; ?>
                    </td>
                    <td style="padding: 10px 12px;">
                        <?php
                            if ($person["nilai"] < 60) {
                                echo "E";
                            } elseif ($person["nilai"] < 70) {
                                echo "D";
                            } elseif ($person["nilai"] < 80) {
                                echo "C";
                            } elseif ($person["nilai"] < 90) {
                                echo "B";
                            } elseif ($person["nilai"] <= 100) {
                                echo "A";
                            };
                         ?>
                    </td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>