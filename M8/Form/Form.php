<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>

<form action="proses.php" name="form" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="website">Website:</label>
    <input type="text" id="website" name="website"><br><br>

    <label for="coment">Coment:</label><br>
    <textarea id="coment" name="coment" rows="4" cols="40"></textarea><br><br>

    <label for="gender">Jenis Kelamin:</label><br>
    <input type="radio" id="gender" name="gender" value="Laki-laki">Laki-laki
    <input type="radio" id="gender" name="gender" value="Perempuan">Perempuan<br><br>

    <button type="submit" name="submit" value=<?php echo date('h:i:sa');?>>Submit</button>
</form>

</body>
</html>