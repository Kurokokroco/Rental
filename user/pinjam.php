<?php include "header2.php"; ?>
<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Data Pinjaman Kendaraan</h4>
        </div>

        <div class="card-body">
            <a href="pinjam_tambah.php" class="btn btn-success btn-sm float-end mb-3">+ Tambah Pinjaman</a>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>No Kendaraan</th>
                    <th>ID User</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>        
                </tr>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pinjam");
                while($p = mysqli_fetch_array($data)){
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['kendaraan_nomor']; ?></td>
                    <td><?= $p['user_id']; ?></td>
                    <td><?= $p['tgl_pinjam']; ?></td>
                    <td><?= $p['tgl_kembali']; ?></td>
                    <td><?= $p['pinjam_status']; ?></td>
                </tr>

                <?php } ?>

            </table>
        </div>
    </div>
</div>

</body>
</html>
