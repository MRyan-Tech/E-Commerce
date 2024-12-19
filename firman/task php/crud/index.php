<?php
include_once("connect.php");

$books = mysqli_query($conn, "SELECT buku.*, nama_pengarang, nama_penerbit, tahun, katalog.nama as nama_katalog FROM buku LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog ORDER BY judul ASC");

$number = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 style="display: flex; justify-content: center;">DATA BUKU PERPUSTKAAN</h1>
        <div style="d-flex justify-content-center w-50 mx-5;">
            <div class="row">
                <div class="col my-3 d-flex justify-content-end">
                    <a href="add.php">
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-folder-plus"> Tambahkan Buku</i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">  
                    <table class="table table-striped">
                        <tr style="background-color: lime;">
                            <th>No</th>
                            <th>JUDUL</th>
                            <th>ISBN</th>
                            <th>NAMA PENGARANG</th>
                            <th>NAMA PENERBIT</th>
                            <th>NAMA KATALOG</th>
                            <th>TAHUN</th>
                            <th>STOK</th>
                            <th>HARGA PINJAM</th>
                            <th>EDIT ATAU HAPUS</th>
                        </tr>
                        <?php while ( $data = mysqli_fetch_assoc($books)) :?>
                            <tr>
                                <td>
                                    <?= $number++ ?>
                                </td>
                                <td>
                                    <?= $data["judul"]; ?>
                                </td>
                                <td>
                                    <?= $data["isbn"]; ?>
                                </td>
                                <td>
                                    <?= $data["nama_pengarang"]; ?>
                                </td>
                                <td>
                                    <?= $data["nama_penerbit"]; ?>
                                </td>
                                <td>
                                    <?= $data["nama_katalog"]; ?>
                                </td>
                                <td>
                                    <?= $data["tahun"]; ?>
                                </td>
                                <td>
                                    <?= $data["qty_stok"]; ?>
                                </td>
                                <td>
                                    <?= $data["harga_pinjam"]; ?>
                                </td>
                                <td>
                                    <a href="edit.php?isbn=<?=$data["isbn"]; ?>">
                                        <button type="button" class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-pencil-fill"></i> Edit
                                        </button>
                                    </a>
                                    <a href="delete.php">
                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash3-fill"></i> Hapus
                                    </button>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>