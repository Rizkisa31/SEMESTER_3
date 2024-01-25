<?php
// Inisialisasi atau resuming sesi
session_start();

// Tambahkan koneksi ke database
include "db.php";

// Tambahkan informasi produk ke dalam keranjang jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addToCart'])) {
    // Ambil data dari form
    $productId = 1; // Ganti ini dengan id produk yang sesuai
    $quantity = $_POST['quantity'][0]; // Ambil quantity pertama (satu-satunya)

    // Tambahkan atau update produk dalam sesi
    $_SESSION['cart'][$productId] = $quantity;
}

// Rest of your existing cart.php code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
</head>
<body>

<header>
    <!-- ... (existing header code) ... -->
</header>

<section class="main-content">
    <div class="container">
        <h2>Keranjang Belanja</h2>
    </div>
    <div class="container-con">
        <?php if (!empty($_SESSION['cart'])) : ?>
            <!-- Display cart contents here -->
            <table>
                <!-- ... (existing table structure) ... -->
            </table>
        <?php else : ?>
            <p>Keranjang belanja Anda kosong.</p>
        <?php endif; ?>
    </div>
</section>

</body>
</html>
