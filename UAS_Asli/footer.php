    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        footer {
            margin-top: 20px;
            background: linear-gradient(to right, #000, #fff);
            color: #fff;
            padding: 20px;
            text-align: center;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }

        footer .contact-info,
        .footer-info {
            background: linear-gradient(to right, #000, #333);
            width: 100%;
        }

        .map-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            float: right;
        }

        .map-container iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Mengubah dari center ke flex-start */
            margin-top: 20px;
        }

        .contact-info div {
            margin: 10px;
            text-align: center;
        }

        .contact-info i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .social-media {
            display: flex;
            justify-content: flex-start; /* Mengubah dari center ke flex-start */
            margin-top: 10px;
        }

        .social-media a {
            margin-right: 10px;
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }

        @media (max-width: 767px) {
            .map-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<?php
// Variabel PHP untuk lokasi Google Map dan nomor WhatsApp
$googleMapURL = "https://www.google.com/maps/embed?pb= ... "; // Ganti dengan URL embed Google Maps yang sesuai
$whatsappNumber = "+62 895-0931-6801";
?>

<footer>
    <div class="social-media">
        <!-- Tambahkan tautan sosial media disini -->
        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
    </div>

    <div class="map-container">
        <!-- Gunakan variabel PHP untuk menyimpan URL Google Map -->
        <iframe src="<?php echo $googleMapURL; ?>" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <div class="contact-info">
        <div>
            <i class="fa fa-whatsapp"></i>
            <!-- Gunakan variabel PHP untuk menyimpan nomor WhatsApp -->
            <p>No WhatsApp: <?php echo $whatsappNumber; ?></p>
        </div>
    </div>

    <div class="footer-info">
        <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">Your Company</a></p>
    </div>
</footer>


</body>
</html>
