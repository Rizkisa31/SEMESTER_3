<?php
require 'functions.php'

if(isset($_POST["register"])) {
    if (registrasi($_POST)> 1 ) {
        echo "<script>
            alert('user baru berhasil ditambahkan!!')
        </script>";
    } else {
        echo mysqli_error($conn)
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="functions.php" method="post">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
            <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>
</body>
</html>