<?php
include "header2.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><strong>Data User</strong></h4>
        </div>

        <div class="card-body">

            <a href="user_tambah.php" class="btn btn-success btn-sm float-end">
                + Tambah  
            </a>
            <div class="clearfix mb-3"></div>

            <table class="table table-bordered table-striped align-middle">

                <thead class="table-light">
                    <tr>
                        <th width="10%">No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>User nama</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "../koneksi.php";
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    $no = 1;

                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['username']; ?></td>
                            <td><?= $d['password']; ?></td>
                            <td><?= $d['user_nama']; ?></td>
                            <td><?= $d['user_alamat']; ?></td>
                            <td><?= $d['user_status']; ?></td>

                            <td>
                                <a href="user_edit.php?id=<?= $d['user_id']; ?>" 
                                   class="btn btn-sm btn-warning">
                                   Edit
                                </a>

                                <a href="user_hapus.php?id=<?= $d['user_id']; ?>" 
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Yakin ingin menghapus user ini?');">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</div>

</body>
</html>
