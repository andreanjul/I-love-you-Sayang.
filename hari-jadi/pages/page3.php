<?php session_start(); if (!isset($_SESSION['login'])) header("Location: ../auth/login.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-10">
            <div class="card shadow-sm rounded-4" style="max-width:900px; margin:auto;">
                <div class="card-body p-5 text-center">

                    <h2 class="fw-semibold mb-4">Bab III</h2>

                    <p class="text-muted fs-5 mb-5">
                        Dan aku masih memilih kamu, setiap hari.
                        Bukan karena semuanya selalu mudah, tapi karena di tengah rumitnya hidup, kamu tetap jadi seseorang yang ingin aku perjuangkan. Pilihan ini tidak lahir dari euforia sesaat, melainkan dari keyakinan yang tumbuh perlahan dan menetap.

                        Aku memilih kamu di hari-hari ketika kita tertawa tanpa alasan.
                        Dan aku juga memilih kamu di hari-hari ketika dunia terasa berat, ketika kata-kata tidak selalu cukup, ketika diam pun butuh ditemani. Karena bagiku, cinta bukan hanya tentang momen indah, tapi tentang kesediaan untuk tetap ada.

                        Aku masih memilih kamu, bahkan saat aku belum tahu seperti apa bentuk esok.
                        Aku tidak memegang janji yang muluk, hanya niat yang jujur untuk terus berjalan bersamamu. Selama kita masih mau saling belajar, saling mendengar, dan saling menjaga, aku percaya itu sudah lebih dari cukup.

                        Aku memilih kamu dengan cara yang mungkin tidak selalu terlihat besar.
                        Lewat perhatian kecil, lewat usaha yang tidak selalu terlihat, lewat kesetiaan yang tidak perlu diumumkan. Karena cinta yang ingin aku rawat bersamamu adalah cinta yang tenang, tidak berisik, tapi nyata.

                        Dan jika suatu hari nanti kamu ragu,
                        ingatlah bahwa aku pernah dan masih berdiri di sini. Dengan perasaan yang sama, dengan niat yang tidak berubah. Aku tidak menjanjikan kesempurnaan, tapi aku menjanjikan ketulusan yang tidak setengah-setengah.

                        Selama cerita ini masih bisa kita lanjutkan bersama,
                        aku ingin terus memilih kamu. Bukan sekali, bukan karena kebiasaan, tapi setiap hari, dengan sadar, dengan hati yang utuh.
                    </p>

                    <div class="d-flex justify-content-between">
                        <a href="page2.php" class="btn btn-outline-secondary rounded-3">Kembali</a>
                        <a href="home.php" class="btn btn-dark rounded-3">Halaman Awal</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
