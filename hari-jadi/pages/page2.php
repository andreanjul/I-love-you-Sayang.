<?php session_start(); if (!isset($_SESSION['login'])) header("Location: ../auth/login.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
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

                    <h2 class="fw-semibold mb-4">Bab II</h2>

                    <p class="text-muted fs-5 mb-5" style="line-height:1.8;">
                            Dan di titik ini, aku sadar satu hal.
                            Aku tidak sedang jatuh cinta pada bayangan tentangmu. Aku mencintai kamu apa adanya, dengan segala tenang dan ribut yang kamu bawa. Aku mencintai caramu membuat hal kecil terasa berarti, dan caramu tanpa sadar menjadi tempat pulang.

                            Aku mulai memahami bahwa bersamamu bukan tentang selalu bahagia.
                            Ada hari-hari biasa, ada lelah, ada diam yang tidak perlu dijelaskan. Tapi justru di situ aku ingin tinggal. Karena cinta yang ingin aku jaga bukan yang selalu berisik, melainkan yang tetap ada saat semuanya sunyi.

                            Aku tidak ingin menjadi seseorang yang hanya pandai berkata.
                            Aku ingin menjadi orang yang hadir. Yang tidak menghilang saat keadaan berubah, yang tidak pergi hanya karena rasa takut muncul lebih dulu. Kalau aku mencintaimu, aku ingin melakukannya dengan tanggung jawab.

                            Ini masih cerita pertama tentang kita,
                            tapi perasaanku tidak terasa seperti awal yang main-main. Aku tidak sedang mencoba-coba. Aku sedang memilih, pelan, sadar, dan dengan niat yang utuh.

                            Mungkin aku tidak selalu tahu cara terbaik mencintaimu.
                            Mungkin aku akan salah, akan belajar, akan memperbaiki. Tapi satu hal yang ingin kamu tahu, aku tidak akan berhenti berusaha hanya karena jalannya tidak selalu mudah.

                            Jika suatu hari nanti kamu bertanya kenapa aku bertahan,
                            jawabannya sederhana. Karena bersamamu, aku ingin menjadi versi diriku yang lebih jujur, lebih tenang, dan lebih berani mencintai.

                            Dan jika kamu mengizinkanku tetap di sini,
                            aku ingin menulis kelanjutannya bersamamu. Bukan dengan kata-kata indah setiap saat, tapi dengan kesetiaan yang pelan dan konsisten.

                            Karena sejak cerita pertama ini dimulai,
                            aku tidak mencari akhir yang cepat. Aku mencari perjalanan yang bisa kita jalani bersama, selama kita sama-sama mau bertahan.
                    </p>

                    <div class="d-flex justify-content-between">
                        <a href="page1.php" class="btn btn-outline-secondary rounded-3">Kembali</a>
                        <a href="page3.php" class="btn btn-dark rounded-3">Selanjutnya</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
