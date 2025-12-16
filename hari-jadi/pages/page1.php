<?php session_start(); if (!isset($_SESSION['login'])) header("Location: ../auth/login.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
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

                    <h2 class="fw-semibold mb-4">Bab I</h2>

                    <p class="text-muted fs-5 mb-5" style="line-height:1.8;">
                        Ini cerita pertama tentang kita.
                        Bukan cerita yang dimulai dengan janji besar atau kalimat sempurna. Ia lahir dari percakapan biasa, dari rasa nyaman yang tumbuh diam-diam, dari perasaan yang awalnya ragu tapi memilih tinggal. Aku tidak tahu sejak kapan tepatnya, tapi di suatu titik, kamu berhenti jadi sekadar nama dan menjadi alasan.

                        Satu bulan mungkin terdengar kecil.
                        Bagi dunia, itu belum apa-apa. Terlalu singkat untuk dirayakan, terlalu awal untuk diyakini. Tapi bagiku, satu bulan cukup untuk mengenal caramu hadir, caramu diam, caramu tetap di sini bahkan saat tidak semua hal mudah. Dan dari situ, aku belajar bahwa waktu tidak selalu menentukan makna, kehadiranlah yang melakukannya.
                        Aku mencintaimu bukan karena semuanya berjalan lancar.
                        Justru karena di sela-sela kebingungan, di antara jeda dan kesalahpahaman kecil, kita masih memilih saling mendengar. Aku belajar bahwa mencintai bukan tentang tidak pernah salah, tapi tentang mau memperbaiki. Tentang tidak lari saat rasanya lebih mudah untuk pergi. 
                        Ini cerita pertama tentang kita, dan aku ingin menjaganya dengan cara yang sederhana.
                        Dengan kejujuran meski kadang tidak indah, dengan kesabaran meski lelah, dengan niat yang tidak berisik tapi konsisten. Aku tidak ingin mencintaimu dengan tergesa-gesa, aku ingin melakukannya dengan sadar, pelan tapi utuh.
                        Aku tidak menjanjikan masa depan yang sempurna.
                        Aku tidak tahu bentuk hari-hari kita nanti. Tapi aku tahu satu hal, aku ingin ada di sana saat kamu senang, saat kamu diam, saat kamu ragu, dan saat dunia terasa berat. Kalau cinta adalah pilihan yang diulang setiap hari, maka aku ingin memilihmu tanpa harus dipaksa. 
                        Jika suatu hari nanti cerita ini tumbuh menjadi panjang,
                        aku ingin kita mengingat bagian awalnya. Saat segalanya masih rapuh tapi jujur. Saat aku mencintaimu bukan karena sudah yakin sepenuhnya, tapi karena aku berani mencoba dengan sungguh-sungguh. Karena bagiku, keberanian itu sendiri sudah merupakan bentuk cinta. 
                        Selamat satu bulan, sayang.
                        Ini memang baru awal. Baru satu halaman dari cerita yang belum selesai. Tapi jika aku boleh berharap, aku ingin menulis lanjutannya bersamamu, bukan dengan janji manis, melainkan dengan kehadiran yang nyata, hari demi hari.
                    </p>

                    <div class="d-flex justify-content-between">
                        <a href="home.php" class="btn btn-outline-secondary rounded-3">Kembali</a>
                        <a href="page2.php" class="btn btn-dark rounded-3">Selanjutnya</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
