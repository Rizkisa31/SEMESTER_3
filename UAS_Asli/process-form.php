<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Jika metode permintaan adalah POST, panggil fungsi processForm
    processForm();
}

function processForm() {
    // Mengambil data yang dikirimkan melalui formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Contoh logika pemrosesan formulir
    // Di sini, Anda dapat menambahkan logika untuk menyimpan data ke database atau melakukan tindakan lainnya
    // Misalnya, menyimpan data ke file atau mengirim email pemberitahuan

    // Setelah pemrosesan, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
    header("Location: success.php");
    exit();
}

?>
