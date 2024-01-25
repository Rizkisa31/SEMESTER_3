<?php include "header.php"?>

<?php
session_start();

// Pastikan user sudah login sebelum mengakses halaman troli
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman login atau ke halaman lain jika diperlukan
    header("Location: login.php");
    exit();
}

include "db_config.php"; // Sertakan koneksi ke database

// ...
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Function to add to cart
    function addToCart($userId, $productId, $quantity) {
        // Make sure quantity is not negative
        $quantity = intval($quantity);
        if ($quantity > 0) {
            global $conn;

            // Insert or update the product quantity in the shopping cart table
            $stmt = $conn->prepare("INSERT INTO shopping_cart (user_id, product_id, quantity) 
                                    VALUES (?, ?, ?) 
                                    ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
            $stmt->bind_param("iii", $userId, $productId, $quantity);
            $stmt->execute();
            $stmt->close();
        }
    }

    // Check if the form is submitted
    if (isset($_POST['addToCart'])) {
        // Assuming you have user ID stored in the session after login
        $userId = $_SESSION['user_id'];

        // Iterate through submitted data and add to cart
        foreach ($_POST['quantity'] as $productId => $quantity) {
            addToCart($userId, $productId, $quantity);
        }

        // Redirect to the cart page
        header("Location: troli.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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

    .troli-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
    }

    .troli-item {
        width: 200px;
        margin-bottom: 20px;
        text-align: center;
        background-color: #fff;
        color: #fff;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .troli-item img {
        height: 150px;
        width: 150px;
        border: 2px solid #fff;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .troli-item:hover img {
        transform: scale(1.1);
    }

    label {
        color: #010101;
    }

    input {
        color: #fff;
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
        position: fixed;
        bottom: 0;
    }
</style>
<body>

<section class="main-content">
    <div class="container">
        <h2>Shopping Cart</h2>
    </div>
    <div class="container">
        <form method="post" action="troli.php">
            <div class="troli-list">
                <?php
                // Fetch shopping cart items from the database
                $userId = $_SESSION['user_id'];
                $result = $conn->query("SELECT products.*, shopping_cart.quantity AS cart_quantity
                                        FROM products
                                        JOIN shopping_cart ON products.id = shopping_cart.product_id
                                        WHERE shopping_cart.user_id = $userId");

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="troli-item">
                        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['product_name']; ?>">
                        <p><?php echo $row['product_name']; ?></p>
                        <p>Rp : <?php echo number_format($row['price']); ?></p>
                        <label for="quantity<?php echo $row['id']; ?>">Quantity:</label>
                        <input type="number" id="quantity<?php echo $row['id']; ?>"
                               name="quantity<?php echo $row['id']; ?>"
                               value="<?php echo $row['cart_quantity']; ?>" min="0">
                    </div>
                    <?php
                }
                ?>
            </div>
            <button type="submit" name="addToCart">Update Cart</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Online Store. All rights reserved.</p>
</footer>

</body>
</html>
