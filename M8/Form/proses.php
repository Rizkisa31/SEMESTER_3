<?php
$koneksi = mysqli_connect("localhost","root","","m8_tugasformphp");

$nama = $_POST['nama'];
$email = $_POST['email'];
$website = $_POST['website'];
$coment = $_POST['coment'];
$gender = $_POST['gender'];
$submit = $_POST['submit'];

$query = "INSERT INTO tugasformphp VALUES('$nama','$email','$website','$coment','$gender','$submit')";

mysqli_query($koneksi, $query);
?>