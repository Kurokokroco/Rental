<?php include "header2.php"; ?>
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

                <!-- PILIH KENDARAAN -->
                <div class="mb-3">
                    <label class="fw-bold">Pilih Kendaraan</label>
                    <select name="kendaraan_nomor" class="form-control" required>
                        <option value="">-- Pilih Kendaraan --</option>
                        <?php
                        $kendaraan = mysqli_query($koneksi, "SELECT * FROM kendaraan");
                        while ($k = mysqli_fetch_assoc($kendaraan)) {
                            echo '<option value="'.$k['kendaraan_nomor'].'">'.
                                 $k['kendaraan_nama'].' - '.$k['kendaraan_tipe'].
                                 '</option>';
                        }
                        ?>
                    </select>
                </div>

                <!-- PILIH USER -->
                <div class="mb-3">
                    <label class="fw-bold">Pilih User</label>
                    <select name="user_id" class="form-control" required>
                        <option value="">-- Pilih User --</option>
                        <?php
                        $user = mysqli_query($koneksi, "SELECT * FROM user WHERE user_status='user'");
                        while ($u = mysqli_fetch_assoc($user)) {
                            echo '<option value="'.$u['user_id'].'">'.
                                 $u['user_nama'].' - ('.$u['username'].')'.
                                 '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" required>
                </div>
                
                <button class="btn btn-success">Simpan</button>
                <a href="pinjam.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>

    </div>
</div>

</body>
</html>
