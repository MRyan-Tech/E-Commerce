<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>Edit Buku</title>
</head>

<?php
	include_once("connect.php");
	$isbn = $_GET['isbn'];

	$buku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
    $katalog = mysqli_query($conn, "SELECT * FROM katalog");

    while($buku_data = mysqli_fetch_array($buku))
    {
    	$judul = $buku_data["judul"];
    	$isbn = $buku_data['isbn'];
    	$tahun = $buku_data['tahun'];
    	$id_penerbit = $buku_data['id_penerbit'];
    	$id_pengarang = $buku_data['id_pengarang'];
    	$id_katalog = $buku_data['id_katalog'];
    	$qty_stok = $buku_data['qty_stok'];
    	$harga_pinjam = $buku_data['harga_pinjam'];
    }

    if(isset($_POST['update'])) {

        $isbn = $_GET['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        
        include_once("connect.php");

        $result = mysqli_query($conn, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
        
        header("Location:index.php");
        exit;
    }
?>
 
<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5">FORM EDIT BUKU</h1>
        <div class="bg-warning w-50">
            <form class="mx-3" action="edit.php?isbn=<?= $isbn; ?>" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ISBN</label><br>
                    <span class="fw-semibold"><?= $isbn ?></span>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="<?= $judul ?>" value="<?= $judul ?>" name="judul">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" value="<?= $tahun ?>" name="tahun" >
                </div>

                <div class="mb-3">
                    <label for="id-penerbit" class="form-label">Penerbit</label>
                    <select class="form-select" aria-label="Default select example" id="id-penerbit" name="id_penerbit">
                        <?php while($data_penerbit = mysqli_fetch_array($penerbit)) : ?>
                            <option <?= ($data_penerbit["id_penerbit"] == $id_penerbit ? "selected" : ""); ?> value="<?= $data_penerbit["id_penerbit"];?>">
                                <?= $data_penerbit["nama_penerbit"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id-pengarang" class="form-label">Pengarang</label>
                    <select class="form-select" aria-label="Default select example" id="id-pengarang" name="id_pengarang">
                        <?php while($data_pengarang = mysqli_fetch_array($pengarang)) : ?>
                            <option <?= ($data_pengarang["id_pengarang"] == $id_pengarang ? "selected" : ""); ?> value="<?= $data_pengarang["id_pengarang"];?>">
                                <?= $data_pengarang["nama_pengarang"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id-katalog" class="form-label">Katalog</label>
                    <select class="form-select" aria-label="Default select example" id="id-katalog" name="id_katalog">
                        <?php while($data_katalog = mysqli_fetch_array($katalog)) : ?>
                            <option <?= ($data_katalog["id_katalog"] == $id_katalog ? "selected" : ""); ?>  value="<?= $data_katalog["id_katalog"];?>">
                                <?= $data_katalog["nama"]; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Qty Stok</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $qty_stok ?>" name="qty_stok" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga Pinjam</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?= $harga_pinjam ?>" name="harga_pinjam" >
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="update" value="Update">
                         <i class="bi bi-save2"> Simpan Perubahan</i>
                    </button>
                </div>
            </form>
            <div class="mx-3">
                <a href="index.php">
                    <button class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle-fill"> Kembali ke Halaman Utama</i>
                    </button>
                </a>
                <br/><br/>
        </div>
    </div>
</body>
</html>