<?php include "header3.php"; ?>
<?php $page = "kendaraan"; ?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Tambah Kendaraan</h4>
        </div>

        <div class="card-body">

            <form action="kendaraan_aksi.php" method="post">
                
                <div class="mb-3">
                    <label>Nama Kendaraan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tipe Kendaraan</label>
                    <input type="text" name="tipe" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Harga Per Hari</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="kendaraan.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>
