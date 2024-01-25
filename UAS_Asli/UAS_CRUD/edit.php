<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
</head>
<body>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM menu WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    // Jika gambar diubah, unggah gambar baru
    if ($_FILES["gambar"]["size"] > 0) {
        $gambar = "uploads/" . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar);
        $sql = "UPDATE menu SET nama='$nama', harga='$harga', gambar='$gambar' WHERE id=$id";
    } else {
        // Jika gambar tidak diubah, gunakan gambar yang ada
        $sql = "UPDATE menu SET nama='$nama', harga='$harga' WHERE id=$id";
    }

    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>

<h2>Edit Menu</h2>

<form method="post" action="" enctype="multipart/form-data">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>

    <label for="harga">Harga:</label>
    <input type="text" name="harga" value="<?php echo $row['harga']; ?>" required><br>

    <label for="gambar">Ganti Gambar (biarkan kosong jika tidak diubah):</label>
    <input type="file" name="gambar" accept="image/*"><br>

    <input type="submit" value="Simpan">
</form>

<a href="index.php">Kembali ke Menu List</a>

</body>
</html>
