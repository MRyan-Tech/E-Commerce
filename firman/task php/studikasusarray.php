<?php 
$persons = [
    [
        "nama" => "firman",
        "alamat" => "Jakarta",
    ],
    [
        "nama" => "joko",
        "alamat" => "bandung",
    ],
];

$books = file_get_contents("buku.json");
$comics = json_decode($books, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div">
        <h1>Tabel 1</h1>
        <div>
            <table border= 1>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
                <?php foreach($persons as $person) : ?>
                    <tr>
                        <td><?= $person["nama"]; ?></td>
                        <td><?= $person["alamat"]; ?></td>
                    </tr>
                <?php endforeach ?>
            </table>

            <h1>tabel 2</h1>
            <table border= 1>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                    </tr>
                    <?php foreach($comics as $comic) : ?>
                        <tr>
                            <td><?= $comic["judul"]; ?></td>
                            <td><?= $comic["pengarang"]; ?></td>
                        </tr>
                    <?php endforeach ?>
            </table>


        </div>
    </div>
</body>
</html>