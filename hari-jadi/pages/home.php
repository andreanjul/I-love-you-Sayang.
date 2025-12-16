<?php session_start(); if (!isset($_SESSION['login'])) header("Location: ../auth/login.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm rounded-4 text-center">
                <div class="card-body p-5">

                    <h1 class="fw-semibold mb-4">
                        Selamat hari jadi yang pertama, Sayangku.
                    </h1>

                    <!-- Kalimat pengantar halus -->
                    <p class="text-muted mb-4">
                        Ada cerita kecil yang ingin aku tunjukkan ke kamu.
                    </p>

                    <div class="d-grid gap-3">
                        <a href="page1.php" class="btn btn-dark rounded-3 py-2">
                            Klik di sini
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
