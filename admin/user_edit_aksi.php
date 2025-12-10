<?php
include "../koneksi.php";

$id = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

if($_POST['password'] != ""){
    $password = md5($_POST['password']);
    mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password',
                    user_nama='$nama', user_alamat='$alamat', user_status='$status'
                    WHERE user_id='$id'");
} else {
    mysqli_query($koneksi, "UPDATE user SET username='$username',
                    user_nama='$nama', user_alamat='$alamat', user_status='$status'
                    WHERE user_id='$id'");
}

header("location:user.php");
?>
