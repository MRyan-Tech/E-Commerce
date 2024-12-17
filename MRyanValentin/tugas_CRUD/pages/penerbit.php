<?php
include_once("../config.php");
$penerbit = mysqli_query($conn, "
    SELECT penerbit.id_penerbit,
           penerbit.nama_penerbit,
           penerbit.email,
           penerbit.telp,
           penerbit.alamat
    FROM penerbit
    ORDER BY penerbit.nama_penerbit ASC
");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="container py-4">
    <center>
        <a href="../index.php" class="btn btn-outline-primary">Buku</a>
        <a href="penerbit.php" class="btn btn-outline-secondary">Penerbit</a>
        <a href="pengarang.php" class="btn btn-outline-success">Pengarang</a>
        <a href="katalog.php" class="btn btn-outline-info">Katalog</a>
        <hr>
    </center>
    <a href="javascript:void(0)" onclick="openForm()"><i class="btn btn-primary mb-3">Tambah Data Penerbit</i></a>

    <table class="table" style="width:100%; margin:0;">
        <tr>
            <th>ID Penerbit</th> 
            <th>Nama Penerbit</th> 
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat Penerbit</th>
            <th>Aksi</th>
        </tr>
    <tbody>
    <?php  
    while ($data_penerbit = mysqli_fetch_assoc($penerbit)) { ?>
        <tr>
            <td><?= $data_penerbit['id_penerbit'] ?></td>
            <td><?= $data_penerbit['nama_penerbit'] ?></td>
            <td><?= $data_penerbit['email'] ?></td>
            <td><?= $data_penerbit['telp'] ?></td>
            <td><?= $data_penerbit['alamat'] ?></td>
            <td>
                <a class="btn btn-warning btn-sm" href="javascript:void(0)" onclick="openEditForm('<?= $data_penerbit['id_penerbit'] ?>', '<?= $data_penerbit['nama_penerbit'] ?>', '<?= $data_penerbit['email'] ?>', '<?= $data_penerbit['telp'] ?>', '<?= $data_penerbit['alamat'] ?>')">Edit</a>
                <a class="btn btn-danger btn-sm" href="../function/functionpenerbit.php?id_penerbit=<?= $data_penerbit['id_penerbit'] ?>" onclick="return confirmDelete();">Delete</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
<!-- Pop-up Form Pendaftaran Penerbit -->
<div class="popup-overlay" id="popup-overlay">
    <div class="popup-form" id="popup-form">
        <span class="close-btn" onclick="closeForm()">&times;</span>
        <h2>Registrasi Penerbit</h2>
        <form action="../function/functionpenerbit.php" method="POST">
            <div class="form-group">
                <label for="id_penerbit">ID Penerbit</label>
                <input type="text" id="id_penerbit" name="id_penerbit" required>
            </div>
            <div class="form-group">
                <label for="nama_penerbit">Nama Penerbit</label>
                <input type="text" id="nama_penerbit" name="nama_penerbit" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" id="telp" name="telp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>
            <input type="hidden" name="action" value="create">
            <button type="submit" name="submit">Registrasi</button>
        </form>
    </div>
</div>
<div class="popup-overlay" id="edit-popup-overlay">
    <div class="popup-form" id="edit-popup-form">
        <span class="close-btn" onclick="closeEditForm()">&times;</span>
        <h2>Edit Data Penerbit</h2>
        <form action="../function/functionpenerbit.php" method="POST">
            <div class="form-group">
                <label for="id_penerbit_edit">ID Penerbit</label>
                <input type="text" id="id_penerbit_edit" name="id_penerbit" required>
            </div>
            <div class="form-group">
                <label for="nama_penerbit_edit">Nama Penerbit</label>
                <input type="text" id="nama_penerbit_edit" name="nama_penerbit" required>
            </div>
            <div class="form-group">
                <label for="email_edit">Email</label>
                <input type="email" id="email_edit" name="email" required>
            </div>
            <div class="form-group">
                <label for="telp_edit">Telepon</label>
                <input type="text" id="telp_edit" name="telp" required>
            </div>
            <div class="form-group">
                <label for="alamat_edit">Alamat</label>
                <textarea id="alamat_edit" name="alamat" required></textarea>
            </div>
            <input type="hidden" name="action" value="update">
            <button type="submit" name="submit">Simpan</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    function openForm(id_penerbit) {
        document.getElementById("popup-overlay").style.display = "flex";
        document.getElementById("popup-form").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popup-overlay").style.display = "none";
        document.getElementById("popup-form").style.display = "none";
    }
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }
    function openEditForm(id_penerbit, nama_penerbit, email, telp, alamat) {
        document.getElementById("edit-popup-overlay").style.display = "flex";
        document.getElementById("edit-popup-form").style.display = "block";

        document.getElementById("id_penerbit_edit").value = id_penerbit;
        document.getElementById("nama_penerbit_edit").value = nama_penerbit;
        document.getElementById("email_edit").value = email;
        document.getElementById("telp_edit").value = telp;
        document.getElementById("alamat_edit").value = alamat;
    }

    function closeEditForm() {
        document.getElementById("edit-popup-overlay").style.display = "none";
        document.getElementById("edit-popup-form").style.display = "none";
    }

</script>
</body>
</html>
