<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "eduwork";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    echo "Connected" ;
} else {
    echo "Not Connected" ;
}

?>
