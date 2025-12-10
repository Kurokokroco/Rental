<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($login);

if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = "login";
     $_SESSION['role']     = $data['user_status']; 

    if ($data['user_status'] == "admin") {
        header("location:admin/index.php");
    } elseif ($data['user_status'] == "user") {
        header("location:user/index.php");
    } else {
        header("location:index.php?pesan=role_tidak_dikenali");
    }
} else {
    header("location:index.php?pesan=gagal");
}
?>
