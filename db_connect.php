<?php
$host = "localhost";
$username = "id20864223_axslampung";
$password = "AXSLampung123!";
$database = "id20864223_db_axslampung";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>