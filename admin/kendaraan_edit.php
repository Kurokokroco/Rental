<?php include "header3.php"; ?>


<?php
include "../koneksi.php";
$nomor = $_GET['nomor'];
$data = mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE kendaraan_nomor='$nomor'");
$d = mysqli_fetch_assoc($data);
?>

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-warning">
            <h4 class="mb-0 text-white">Edit Kendaraan</h4>
        </div>

        <div class="card-body">

            <form action="kendaraan_edit_aksi.php" method="post">

                <input type="hidden" name="nomor" value="<?= $d['kendaraan_nomor']; ?>">

                <div class="mb-3">
                    <label>Nama Kendaraan</label>
                    <input type="text" name="nama" class="form-control" value="<?= $d['kendaraan_nama']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Tipe Kendaraan</label>
                    <input type="text" name="tipe" class="form-control" value="<?= $d['kendaraan_tipe']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Harga Per Hari</label>
                    <input type="number" name="harga" class="form-control" value="<?= $d['kendaraan_harga_perhari']; ?>" required>
                </div>

                <button class="btn btn-warning text-white">Update</button>
                <a href="kendaraan.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>
