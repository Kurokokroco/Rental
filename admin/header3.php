<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Rental Kendaraan</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
                <img src="../img/logo_smk3_kendal_hd.png"
                    alt="Logo" height="35" class="me-2">

                Rental Skanega
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kendaraan.php">Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pinjam.php">Pinjam</a>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex align-items-center me-2">
                        <span class="text-primary fw-semibold">
                            Selamat datang, <?= $_SESSION['username']; ?>
                        </span>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-white btn-sm text-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>