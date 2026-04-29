<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            <a href="register.php" class="btn btn-primary">Daftar</a>
        </div>
    </div>
</nav>

<!-- FORM -->
<div class="container d-flex justify-content-center align-items-center" style="height:90vh;">
<div class="card p-4" style="width:350px;">

<h4>Login</h4>

<form action="ceklogin.php" method="POST">
<input required class="form-control mb-2" name="username" placeholder="Username">
<input required class="form-control mb-2" type="password" name="password" placeholder="Password">

<button class="btn btn-primary w-100">Login</button>
</form>

<p class="text-center mt-3">
    Belum punya akun? <a href="register.php">Daftar</a>
</p>

</div>
</div>

</body>
</html>