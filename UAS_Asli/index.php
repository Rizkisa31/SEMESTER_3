<!-- Header -->
<?php include "header.php"?>

<!-- Body -->
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimal Online Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <a href="css/style.css"></a>
</head>
<style>
        /* Tambahkan atau sesuaikan gaya sesuai kebutuhan Anda */
        body {
           width: 100%;
           height: 100%;
            background-image: url('img/background.jpeg');
            background-color: #f8f9fa;
        }

        .slider_section {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
        }

        .carousel-item {
            display: none;
            position: relative;
            width: 100%;
        }

        .carousel-item.active {
            display: block;
        }

        .detail-box {
            text-align: left;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .detail-box h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .detail-box p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-box {
            text-align: left;
        }

        .btn1 {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #ffc107;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn1:hover {
            background-color: #ffcd38;
            color: #333;
        }
    </style>
<body>

<!-- Start Utama -->

<section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Apa itu Vape?
                    </h1>
                    <p>
                    Vape, atau rokok elektronik, adalah perangkat elektronik yang dirancang untuk menggantikan rokok tradisional. Perangkat ini bekerja dengan memanaskan cairan yang disebut e-liquid (atau vape juice) untuk menghasilkan uap yang dapat dihirup. E-liquid biasanya terdiri dari campuran propilen glikol, gliserin, nikotin (opsional), dan berbagai jenis rasa.
                    </p>
                    <div class="btn-box">
                      <a href="products.php" class="btn1 text-dark">
                        Pesan Sekarang
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- End Utama -->


<!-- footer -->
<?php include "footer.php"?>

</body>
</html>
