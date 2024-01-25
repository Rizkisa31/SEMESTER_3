<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R VAPE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>


<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background: linear-gradient(to right, #000, #fff);
    color: #fff;
}

header {
    background: linear-gradient(to right, #000, #333);
    color: #fff;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100px;
}

.container {
    display: flex;
    align-items: center;
}

.container img.logo {
    height: 70px;
    width: 70px;
    margin-right: 20px;
}

h4 {
    color: #ffd700;
    font-size: 24px;
    margin-top: 10px;
}

.container-keranjang {
    margin-left: auto;
}

.container-2 {
    height: 100px;
}

.container-2 ul {
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none;
    height: 100%;
}

.container-2 ul li {
    margin-right: 20px;
    display: flex;
    align-items: center;
    height: 100%;
}

.container-2 ul li a {
    text-decoration: none;
    color: #ffd700;
    font-weight: bold;
    font-size: 15px;
    transition: color 0.5s ease;
    height: 100%;
    display: flex;
    align-items: right;
}

.container-2 ul li a:hover {
    color: #ffd700;
}

a.login-link {
    color: #ffd700;
    text-decoration: none;
    margin-left: 20px;
    font-weight: bold;
    transition: color 0.3s ease-in-out;
}

a.login-link:hover {
    color: #fff;
}

button {
    background-color: #ffd700;
    color: #000;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    margin-left: 20px;
}

button:hover {
    background-color: #333;
    color: #fff;
}

a {
    color: #ffd700;
    text-decoration: none;
    margin-left: 20px;
    font-weight: bold;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #fff;
}

</style>

<body>
<header>
<div class="container">
        <img src="img/Logo.png" alt="Your Logo" class="logo">
        <h4>R VAPE</h4>
        <div class="container-keranjang">
                <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <!-- ... (existing navigation and login elements) ... -->
</div>
<div class="container-2">
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="products.php">Produk</a></li>
        <li><a href="login_admin.php">Login</a></li>
    </ul>
</div>
</header>

<script>
    // Menangani perubahan pada dropdown dan mengarahkan ke halaman terpilih
    function navigateToPage() {
        var selectedValue = document.getElementById("fruitDropdown").value;
        document.getElementById("selectedOption").innerText = "Selected Page: " + selectedValue;

        // Mengarahkan ke halaman terpilih
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }
</script>
