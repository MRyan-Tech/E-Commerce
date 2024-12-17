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