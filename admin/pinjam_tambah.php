<?php include "header4.php"; ?>
<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h4>Tambah Pinjaman</h4>
        </div>

        <div class="card-body">
            <form action="pinjam_aksi.php" method="post">

                <div class="mb-3">
                    <label>No Kendaraan</label>
                    <input type="number" name="kendaraan_nomor" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>ID User</label>
                    <input type="number" name="user_id" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="pinjam_status" class="form-control">
                        <option value="dipinjam">Dipinjam</option>
                        <option value="kembali">Kembali</option>
                    </select>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="pinjam.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>
