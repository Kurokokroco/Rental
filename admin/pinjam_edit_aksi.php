<?php
include "../koneksi.php";

$id           = $_POST['id'];
$kendaraan    = $_POST['kendaraan_nomor'];
$user         = $_POST['user_id'];
$tgl_pinjam   = $_POST['tgl_pinjam'];
$tgl_kembali  = $_POST['tgl_kembali'];
$status       = $_POST['pinjam_status'];

mysqli_query($koneksi, "UPDATE pinjam SET
    kendaraan_nomor='$kendaraan',
    user_id='$user',
    tgl_pinjam='$tgl_pinjam',
    tgl_kembali='$tgl_kembali',
    pinjam_status='$status'
    WHERE pinjam_id='$id'
");

header("location:pinjam.php");
?>
