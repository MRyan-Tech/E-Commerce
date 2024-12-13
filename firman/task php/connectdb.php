<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "perpus";

$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if ($conn) {
    echo "connect db successfully";
} else {
    echo "connect db failed";
}

$result = mysqli_query($conn, "SELECT * FROM anggota");

$number = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="display: flex; justify-content: center;">Connect Database Task</h1>
    <div style="display: flex; justify-content: center;">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr style="background-color: lime;">
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Telpon</th>
                <th>Alamat</th>
            </tr>
            <?php while ( $persons = mysqli_fetch_assoc($result) ) : ?>
                <tr>
                    <td><?= $number++ ?></td>
                    <td><?= $persons["nama"]; ?></td>
                    <td><?= $persons["username"]; ?></td>
                    <td><?= $persons["email"]; ?></td>
                    <td><?= $persons["telp"]; ?></td>
                    <td><?= $persons["alamat"]; ?></td>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
</body>
</html>