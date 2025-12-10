<?php include "header4.php"; ?>
<?php include "../koneksi.php"; ?>

<?php
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE pinjam_id='$id'");
$p = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <div class="card shadow">

        <div class="card-header bg-warning text-white">
            <h4>Edit Pinjaman</h4>
        </div>

        <div class="card-body">
            <form action="pinjam_edit_aksi.php" method="post">

                <input type="hidden" name="id" value="<?= $p['pinjam_id']; ?>">

                <div class="mb-3">
                    <label>No Kendaraan</label>
                    <input type="number" name="kendaraan_nomor" value="<?= $p['kendaraan_nomor']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>ID User</label>
                    <input type="number" name="user_id" value="<?= $p['user_id']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" value="<?= $p['tgl_pinjam']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" value="<?= $p['tgl_kembali']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="pinjam_status" class="form-control">
                        <option value="dipinjam" <?= $p['pinjam_status']=='dipinjam'?'selected':''; ?>>Dipinjam</option>
                        <option value="kembali" <?= $p['pinjam_status']=='kembali'?'selected':''; ?>>Kembali</option>
                    </select>
                </div>

                <button class="btn btn-warning text-white">Update</button>
                <a href="pinjam.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>

    </div>
</div>

</body>
</html>
