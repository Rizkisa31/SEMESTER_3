<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_store_db";

// Buat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
