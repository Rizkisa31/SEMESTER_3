<?php
// Koneksi ke database
$host = "localhost"; // Ganti dengan host Anda
$user = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "online_store_db"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencocokkan username dan password
$sql = "SELECT * FROM register2 WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pengguna ditemukan
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        // Password cocok, login berhasil
        session_start();
        $_SESSION['username'] = $row['username'];
        header("Location: UAS_CRUD/index.php"); // Ganti dengan halaman tujuan setelah login berhasil
    } else {
        // Password tidak cocok
        echo "Login gagal. Password salah.";
        header("Location: login_admin.php");
    }
} else {
    // Pengguna tidak ditemukan
    echo "Login gagal. Pengguna tidak ditemukan.";
}

// Tutup koneksi
$conn->close();
?>
