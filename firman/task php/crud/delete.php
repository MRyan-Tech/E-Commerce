<?php 
    include_once("connect.php");

    $isbn = $_GET["isbn"];

    $delete = mysqli_query($conn, "DELETE FROM buku WHERE isbn = '$isbn' ");

    header("location:index.php");

?>