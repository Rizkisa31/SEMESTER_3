<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'online_store_db';

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
