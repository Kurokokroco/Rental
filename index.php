<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ke Sistem informasi laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

<br><br><br>
<center>
    <h2><strong>Sistem Informasi</strong><br>Rental Kendaraan RPL Skanega</h2>
</center>
<br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo '<div class="alert alert-danger">Username atau password anda salah</div>';
                }
                if ($_GET['pesan'] == "belum_login") {
                    echo '<div class="alert alert-info">Anda harus login untuk mengakses halaman ini</div>';
                }
                if ($_GET['pesan'] == "logout") {
                    echo '<div class="alert alert-info">Anda berhasil logout</div>';
                }
            }
            ?>

            <form action="login.php" method="post" class="border rounded p-4 shadow-sm bg-light">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
