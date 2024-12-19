<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>Add Buku</title>
</head>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
    $katalog = mysqli_query($conn, "SELECT * FROM katalog");

    if(isset($_POST["submit"])) {
        $isbn = $_POST["isbn"];
        $judul = $_POST["judul"];
        $tahun = $_POST["tahun"];
        $id_penerbit = $_POST["id_penerbit"];
        $id_pengarang = $_POST["id_pengarang"];
        $id_katalog = $_POST["id_katalog"];
        $qty_stok = $_POST["qty_stok"];
        $harga_pinjam = $_POST["harga_pinjam"];
        
        include_once("connect.php");

        $result = mysqli_query($conn, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
        
        header("Location:index.php");
        exit;
    } 
?>
 
<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center ">
        <h1 class="mb-3">Form Tambah Buku</h1>
        <div class="bg-info w-50">
            <form class="mx-5 pt-5" action="add.php" method="post" name="form1">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukkan judul buku" name="judul">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="Masukkan ISBN buku" name="isbn">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" placeholder="Masukkan tahun terbit buku" name="tahun" >
                </div>
                
                <div class="mb-3">
                    <label for="id-penerbit" class="form-label">Penerbit</label>
                    <select class="form-select" aria-label="Default select example" id="id-penerbit" name="id_penerbit">
                        <?php while($data_penerbit = mysqli_fetch_array($penerbit)) : ?>
                            <option value="<?= $data_penerbit["id_penerbit"];?>">
                                <?= $data_penerbit["nama_penerbit"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id-pengarang" class="form-label">Pengarang</label>
                    <select class="form-select" aria-label="Default select example" id="id-pengarang" name="id_pengarang">
                        <?php while($data_pengarang = mysqli_fetch_array($pengarang)) : ?>
                            <option value="<?= $data_pengarang["id_pengarang"];?>">
                                <?= $data_pengarang["nama_pengarang"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id-katalog" class="form-label">Katalog</label>
                    <select class="form-select" aria-label="Default select example" id="id-katalog" name="id_katalog">
                        <?php while($data_katalog = mysqli_fetch_array($katalog)) : ?>
                            <option value="<?= $data_katalog["id_katalog"];?>">
                                <?= $data_katalog["nama"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Qty Stok</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan qty stok buku" name="qty_stok" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga Pinjam</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan harga pinjam buku" name="harga_pinjam" >
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="submit" value="add">
                        <i class="bi bi-file-earmark-plus"> Tambahkan Data Buku</i>
                    </button>
                </div>
            </form>
            <div class="mx-5">
                <a href="index.php">
                    <button class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"> Kembali ke Halaman Utama</i>
                    </button>
                </a>
                <br/><br/>
            </div>
        </div>
    </div>
</body>
</html>