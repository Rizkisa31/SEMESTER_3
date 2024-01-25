<?php
session_start();

// Pastikan user sudah login sebelum mengakses halaman ini
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman login atau ke halaman lain jika diperlukan
    header("Location: login.php");
    exit();
}

include "db_config.php"; // Sertakan koneksi ke database

// Mendapatkan informasi produk yang akan ditambahkan ke troli
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambahKeTroli'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Panggil fungsi untuk menambahkan produk ke troli
    addToCart($_SESSION['user_id'], $productId, $quantity);

    // Redirect kembali ke halaman troli
    header("Location: troli.php");
    exit();
}

// ...

// Mendapatkan informasi produk yang akan ditampilkan di halaman ini
if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Query untuk mendapatkan informasi produk
    $result = $conn->query("SELECT * FROM products WHERE id = $productId");

    // Periksa apakah produk ditemukan
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        // Redirect ke halaman lain atau berikan pesan error jika produk tidak ditemukan
        header("Location: halaman_lain.php");
        exit();
    }
} else {
    // Redirect ke halaman lain jika tidak ada product_id yang diberikan
    header("Location: halaman_lain.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah ke Troli</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Gaya CSS sesuai kebutuhan formulir */
</style>
<body>

<section class="main-content">
    <div class="container">
        <h2>Tambah ke Troli</h2>
    </div>
    <div class="container">
        <form method="post" action="tambah_ke_troli.php">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <div class="troli-item">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['product_name']; ?>">
                <p><?php echo $product['product_name']; ?></p>
                <p>Rp : <?php echo number_format($product['price']); ?></p>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button type="submit" name="tambahKeTroli">Tambah ke Troli</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Online Store. All rights reserved.</p>
</footer>

</body>
</html>
