<?php include "connect.php"; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM menu WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// Hapus gambar terkait jika ada
$gambarPath = $row['gambar'];
if (file_exists($gambarPath)) {
    unlink($gambarPath);
}

mysqli_query($conn, "DELETE FROM menu WHERE id=$id");

header("Location: index.php");
?>
