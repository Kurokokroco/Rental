<?php
include "../koneksi.php";

$nama  = $_POST['nama'];
$tipe  = $_POST['tipe'];
$harga = $_POST['harga'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, "../gambar_kendaraan/".$gambar);

mysqli_query($koneksi, "INSERT INTO kendaraan 
(kendaraan_nama, kendaraan_tipe, kendaraan_harga_perhari, kendaraan_gambar) 
VALUES('$nama', '$tipe', '$harga', '$gambar')");

header("location:kendaraan.php");
?>
