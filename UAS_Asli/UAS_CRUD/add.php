<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="file"] {
            margin-top: 8px;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #4caf50;
            text-decoration: none;
        }
    </style>
<body>

<h2>Tambah Menu</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    // Unggah gambar
    $gambar = "uploads/" . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar);

    $sql = "INSERT INTO menu (nama, harga, gambar) VALUES ('$nama', '$harga', '$gambar')";
    mysqli_query($conn, $sql);

    // Debug: Tampilkan kueri SQL
    echo $sql;

    header("Location: index.php");
}
?>

<form method="post" action="" enctype="multipart/form-data">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="harga">Harga:</label>
    <input type="text" name="harga" required><br>

    <label for="gambar">Pilih Gambar:</label>
    <input type="file" name="gambar" accept="image/*" required><br>

    <input type="submit" value="Tambah">
</form>

<a href="index.php">Kembali ke Menu List</a>

</body>
</html>
