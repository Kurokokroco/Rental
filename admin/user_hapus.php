<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE  FROM user where user_id = '$id'");
echo "<script>alert('Yakin ingin di hapus?'); window.location.href='user.php'</script>";
?>