<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Table</title>
<body>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>Nama ke " . $i . "</td>";
        echo "<td>Kelas " . (11 - $i) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
