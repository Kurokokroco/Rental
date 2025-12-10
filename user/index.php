<?php
include("header.php");
include("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Rental Kendaraan</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-4">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Sistem Informasi Rental Kendaraan RPL Skanega</h3>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <strong>Riwayat Peminjaman</strong>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-secondary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Alamat</th>
                            <th>Status Pinjam</th>
                            <th>Nama Kendaraan</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;

                        $data = mysqli_query($koneksi, "
                    SELECT 
                        user.user_nama,
                        user.user_alamat,
                        pinjam.pinjam_status,
                        kendaraan.kendaraan_nama,
                        pinjam.tgl_pinjam,
                        pinjam.tgl_kembali
                    FROM pinjam
                    JOIN user ON user.user_id = pinjam.user_id
                    JOIN kendaraan ON kendaraan.kendaraan_nomor = pinjam.kendaraan_nomor
                    ORDER BY pinjam.pinjam_id DESC
                ");

                        while ($d = mysqli_fetch_assoc($data)) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $d['user_nama']; ?></td>
                                <td><?= $d['user_alamat']; ?></td>

                                <td class="text-center">
                                    <?php
                                    if ($d['pinjam_status'] == "dipinjam") {
                                        echo '<span class="badge bg-warning text-dark">Dipinjam</span>';
                                    } else {
                                        echo '<span class="badge bg-success">Kembali</span>';
                                    }
                                    ?>
                                </td>

                                <td><?= $d['kendaraan_nama']; ?></td>
                                <td><?= $d['tgl_pinjam']; ?></td>
                                <td><?= $d['tgl_kembali']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <br>
        <br>

    </div>
</body>