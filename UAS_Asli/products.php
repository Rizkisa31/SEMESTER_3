<?php include "header.php"?>

<?php
session_start();
include "db_config.php"; // Sertakan koneksi ke database
?>
<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simpan data produk yang ditambahkan ke troli di sini
    // ...

    // Redirect kembali ke halaman products.php atau halaman lainnya
    header("Location: products.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #fff;
            text-align: center;
        }

        .main-content {
            background-color: #000;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .container-con {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .product {
            width: 200px;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            background-color: #fff;
            color: #fff; /* Font color set to white */
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .product p,
        .product label {
            color: #000;
        }

        .product input {
            color: #000;
            background-color: #fff;
            border: 1px solid #000;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            height: 150px;
            width: 150px;
            border: 2px solid #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .product:hover img {
            transform: scale(1.1);
        }

        label {
            color: #010101;
        }

        input {
            color: #fff; /* Font color set to white */
            background-color: #000;
            border: 1px solid #fff;
            border-radius: 4px;
            padding: 5px;
            margin-top: 5px;
        }

        button {
            margin-top: 20px;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            align-items: 
        }

        button:hover {
            background-color: #333;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            bottom: 0;
        }
    </style>


<body>

<a href="UAS_CRUD/add.php">Tambah Produk</a>

<section class="main-content">
    <div class="container">
        <h2>Semua Produk</h2>
    </div>
    <div class="container-con">
        <form method="post" action="cart.php">
            <div class="product-list">
                <div class="product">
                    <img src="img/R234_Spirit_Green.jpeg" alt="Product 1">
                    <p>Hotcig R234 Spirit Green</p>
                    <p>Rp : 510.000 </p>
                    <label for="quantity1">Quantity:</label>
                    <input type="number" id="quantity1" name="quantity[]" value="0" min="0">
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/R234_Mistic_Purple.jpeg" alt="Product 2">
                    <p>Hotcig R234 Mistic Purple</p>
                    <p>Rp : 510.000 </p>
                    <label for="quantity2">Quantity:</label>
                    <input type="number" id="quantity1" name="quantity[]" value="0" min="0">
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/R234_Golden_Frost.jpeg" alt="Product 3">
                    <p>Hotcig R234 Golden Frost</p>
                    <p>Rp : 510.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <input type="number" id="quantity1" name="quantity[]" value="0" min="0">
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/R234_Black_Pink.jpeg" alt="Product 3">
                    <p>Hotcig R234 Black Pink</p>
                    <p>Rp : 510.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <input type="number" id="quantity1" name="quantity[]" value="0" min="0">
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/M200_Galaxy_Black.jpeg" alt="Product 3">
                    <p>Centaurus M200 Galaxy Black</p>
                    <p>Rp : 530.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/RDA_DR_Turquosie.jpeg" alt="Product 3">
                    <p>RDA DR RDA DR Turquosie</p>
                    <p>Rp : 310.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/RDA_DR_Black_Gold.jpeg" alt="Product 3">
                    <p>RDA DR Black Gold</p>
                    <p>Rp : 310.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
                <div class="product">
                    <img src="img/RDA_DR_Black_Red.jpeg" alt="Product 3">
                    <p>RDA DR Black Red</p>
                    <p>Rp : 310.000 </p>
                    <label for="quantity3">Quantity:</label>
                    <button type="submit" class="aadToCartBtn" data-product-id="1">Tambah KeTroli</button>
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Online Store. All rights reserved.</p>
</footer>

</body>
<script>
    // Ambil semua tombol "Tambah KeTroli"
    const addToCartButtons = document.querySelectorAll('.addToCartBtn');

    // Tambahkan event listener untuk setiap tombol
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const quantity = document.getElementById(`quantity${productId}`).value;

            // Kirim data ke server (cart.php) menggunakan Fetch API
            fetch('cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `addToCart=true&productId=${productId}&quantity=${quantity}`,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                alert(data.message); // Tampilkan pesan sukses atau lainnya
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
        });
    });
</script>


</html>
