<?php 
session_start(); 
include 'koneksi.php';

// 🔥 TAMBAHAN AGAR BISA DAFTAR
if(isset($_POST['submit'])){
    $nik = $_POST['nik'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($konek,"INSERT INTO `user` (nik,username,password)
    VALUES('$nik','$username','$password')");

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <b>Sistem<span class="mate">Kependudukan</span></b>
        </a>

        <div class="ms-auto">
            <a href="index.php" class="nav-link text-white d-inline me-3">Home</a>
            <a href="login.php" class="btn btn-light">Login</a>
        </div>
    </div>
</nav>

<!-- FORM -->
<div class="container d-flex justify-content-center align-items-center" style="height:90vh;">
<div class="card p-4" style="width:350px;">

<h4>Daftar</h4>

<form method="POST">
<input required class="form-control mb-2" name="nik" placeholder="NIK">
<input required class="form-control mb-2" name="username" placeholder="Username">
<input required class="form-control mb-2" type="password" name="password" placeholder="Password">

<button class="btn btn-primary w-100" name="submit">Daftar</button>

</form>

<p class="text-center mt-3">
    Sudah punya akun? <a href="login.php">Login</a>
</p>

</div>
</div>

</body>
</html>