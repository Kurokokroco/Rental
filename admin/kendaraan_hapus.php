<?php
include "../koneksi.php";

$nomor = $_GET['nomor'];
mysqli_query($koneksi, "DELETE FROM kendaraan WHERE kendaraan_nomor='$nomor'");

header("location:kendaraan.php");
?>
