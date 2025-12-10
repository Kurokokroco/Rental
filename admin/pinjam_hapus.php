<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE  FROM pinjam where pinjam_id = '$id'");
echo "<script>alert('Yakin ingin di hapus?'); window.location.href='pinjam.php'</script>";
?>