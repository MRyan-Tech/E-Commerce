<?php
include_once("../config.php");
// function untuk menambahkan data penerbit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'update') {
        // Logika untuk update data penerbit
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE penerbit SET 
                    nama_penerbit = '$nama_penerbit',
                    email = '$email',
                    telp = '$telp',
                    alamat = '$alamat'
                  WHERE id_penerbit = '$id_penerbit'";

        if (mysqli_query($conn, $query)) {
            echo "<script> alert('Data penerbit berhasil diperbarui'); window.location.href='../pages/penerbit.php';</script>";
        } else {
            echo "<script> alert('Terjadi kesalahan: " . mysqli_error($conn) . "'); window.location.href='../pages/penerbit.php';</script>";
        }
    } elseif ($action === 'create') {
        // Logika untuk menambahkan data penerbit
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO penerbit (id_penerbit, nama_penerbit, email, telp, alamat) 
                  VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data penerbit berhasil ditambahkan'); window.location.href='../pages/penerbit.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "'); window.location.href='../pages/penerbit.php';</script>";
        }
    }
}


// Fungsi untuk menghapus data penerbit
if (isset($_GET['id_penerbit'])) {
    $id_penerbit = $_GET['id_penerbit'];

    // Query untuk menghapus data penerbit
    $query = "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'";

    if (mysqli_query($conn, $query)) {
        // Redirect setelah berhasil dihapus
        echo "<script>alert('Data penerbit berhasil dihapus!'); window.location.href='../pages/penerbit.php';</script>";
    } else {
        // Tampilkan error jika query gagal
        echo "<script>alert('Terjadi kesalahan saat menghapus data.'); window.location.href='../pages/penerbit.php';</script>";
    }
}
?>
