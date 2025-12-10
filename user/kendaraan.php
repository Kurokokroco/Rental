<?php include "header3.php"; ?>
<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kendaraan Tersedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">

        <h3 class="mb-4 text-center">Daftar Kendaraan Tersedia</h3>

        <div class="row g-4">
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM kendaraan ORDER BY kendaraan_nomor DESC");
            while ($d = mysqli_fetch_assoc($data)) {
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 shadow-sm text-center">

                        <img
                            src="../img/<?= !empty($d['kendaraan_gambar']) ? $d['kendaraan_gambar'] : 'default.png'; ?>"
                            class="img-fluid mx-auto d-block p-2"
                            style="height: 180px; object-fit: contain;"
                            alt="kendaraan">

                        <div class="card-body">
                            <h6 class="fw-bold mb-1"><?= $d['kendaraan_nama']; ?></h6>
                            <p class="text-muted mb-1"><?= $d['kendaraan_tipe']; ?></p>

                            <p class="text-success fw-bold mb-3">
                                Rp <?= number_format($d['kendaraan_harga_perhari'], 0, ',', '.'); ?>/Hari
                            </p>

                            <a href="pinjam.php?nomor=<?= $d['kendaraan_nomor']; ?>"
                                class="btn btn-primary btn-sm w-100">
                                Pesan
                            </a>
                        </div>

                    </div>
                </div>


            <?php } ?>
        </div>

    </div>
</body>

</html>