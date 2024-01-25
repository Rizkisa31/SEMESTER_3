<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CRUD</title>
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

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 10%;
        }

        a {
            display: inline-block;
            text-align: left;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
<body>
<div class="container-back">
    <a href="../index.php">Kembali</a>
</div>
<h2>Menu List</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM menu");
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['harga']}</td>";
        echo "<td><img src='{$row['gambar']}' alt='{$row['nama']}' style='width: 50px; height: 50px;'></td>";
        echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<a href="add.php">Tambah Menu</a>

</body>
</html>