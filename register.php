<?php 
session_start(); 
include 'koneksi.php';

if(isset($_POST['submit'])){

    $nik = $_POST['nik'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // CEK USERNAME
    $cek = mysqli_query($konek,
    "SELECT * FROM user WHERE username='$username'");

    if(mysqli_num_rows($cek) > 0){

        echo "
        <script>
        alert('Username sudah digunakan!');
        window.location='register.php';
        </script>
        ";

        exit;
    }

    // SIMPAN USER
 mysqli_query($konek,
"INSERT INTO user (nik,username,password,role)
VALUES('$nik','$username','$password','user')");

    echo "
    <script>
    alert('Registrasi berhasil!');
    window.location='login.php';
    </script>
    ";

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-login">

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            <b>Sistem<span class="mate">Kependudukan</span></b>
        </a>

        <div class="ms-auto">

            <a href="index.php"
            class="nav-link text-white d-inline me-3">

            Home

            </a>

            <a href="login.php"
            class="btn btn-light">

            Login

            </a>

        </div>

    </div>
</nav>

<div class="container d-flex justify-content-center align-items-center"
style="height:90vh;">

<div class="card register-card p-4 shadow">

<div class="text-center mb-3">

    <i class="bi bi-person-plus icon-login"></i>

    <h4>Daftar</h4>

</div>

<form method="POST">

    <div class="input-group mb-3">

        <span class="input-group-text">
            <i class="bi bi-card-text"></i>
        </span>

        <input required
        class="form-control"
        name="nik"
        placeholder="NIK">

    </div>

    <div class="input-group mb-3">

        <span class="input-group-text">
            <i class="bi bi-person"></i>
        </span>

        <input required
        class="form-control"
        name="username"
        placeholder="Username">

    </div>

    <div class="input-group mb-3">

        <span class="input-group-text">
            <i class="bi bi-lock"></i>
        </span>

        <input required
        type="password"
        class="form-control"
        name="password"
        placeholder="Password">

    </div>

    <button class="btn btn-primary w-100"
    name="submit">

    Daftar

    </button>

</form>

<a href="index.php"
class="btn btn-outline-secondary w-100 mt-2">

<i class="bi bi-arrow-left"></i>
Kembali

</a>

<p class="text-center mt-3">

Sudah punya akun?
<a href="login.php">Login</a>

</p>

</div>
</div>

</body>
</html>