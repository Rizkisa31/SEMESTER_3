<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
}

.produk-list, .troli {
    width: 45%;
    display: inline-block;
    vertical-align: top;
    margin-right: 5%;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

a {
    text-decoration: none;
    color: #3498db;
}

a:hover {
    color: #2980b9;
}

.troli p {
    font-weight: bold;
}

</style>
<body>

<?php
// Inisialisasi session
session_start();

// Fungsi untuk menambah produk ke troli
function tambahProduk($id, $nama, $harga) {
    if (!isset($_SESSION['troli'][$id])) {
        $_SESSION['troli'][$id] = [
            'id' => $id,
            'nama' => $nama,
            'harga' => $harga,
            'quantity' => 1
        ];
    } else {
        $_SESSION['troli'][$id]['quantity']++;
    }
}

// Fungsi untuk menghitung total harga
function hitungTotal() {
    $total = 0;
    if (isset($_SESSION['troli'])) {
        foreach ($_SESSION['troli'] as $produk) {
            $total += $produk['harga'] * $produk['quantity'];
        }
    }
    return $total;
}

// Cek apakah ada aksi tambah produk
if (isset($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
    tambahProduk($_GET['id'], $_GET['nama'], $_GET['harga']);
}

// Cek apakah ada aksi hapus produk
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {
    unset($_SESSION['troli'][$_GET['id']]);
}

?>

<div class="container">
    <h2>Shopping Cart</h2>

    <div class="produk-list">
        <h3>Produk</h3>
        <ul>
            <li><a href="?aksi=tambah&id=1&nama=Produk A&harga=10">Produk A - $10</a></li>
            <li><a href="?aksi=tambah&id=2&nama=Produk B&harga=15">Produk B - $15</a></li>
            <li><a href="?aksi=tambah&id=3&nama=Produk C&harga=20">Produk C - $20</a></li>
        </ul>
    </div>

    <div class="troli">
        <h3>Troli</h3>
        <ul>
            <?php
            if (isset($_SESSION['troli'])) {
                foreach ($_SESSION['troli'] as $produk) {
                    echo "<li>{$produk['nama']} ({$produk['quantity']}) - \${$produk['harga']}</li>";
                    echo "<a href='?aksi=hapus&id={$produk['id']}'>Hapus</a>";
                }
            }
            ?>
        </ul>
        <p>Total: $<?php echo hitungTotal(); ?></p>
    </div>
</div>

</body>
</html>
