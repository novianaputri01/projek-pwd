<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-bg">

 <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid px-3">

        <a class="navbar-brand d-flex align-items-center text-white" href="#">
            <i class="bi bi-bank2 logo-icon me-2"></i>
            <div>
                <b>Sistem Akta Kelahiran</b><br>
                <small>Dinas Kependudukan</small>
            </div>
        </a>

        <div class="ms-auto">
    
    <a href="dashboard.php"
       class="nav-link text-white d-inline me-3">
       Beranda
    </a>

    <a href="riwayat.php"
       class="nav-link text-white d-inline me-3">
       Riwayat
    </a>

    <a href="logout.php"
       class="btn btn-danger btn-sm">
       Logout
    </a>

</div>

    </div>
</nav>

<div class="container text-center text-white mt-5">

    <h2 class="fw-bold">Selamat Datang, <?= $_SESSION['username']; ?></h2>
    

    <p class="mb-4">
    Anda telah masuk ke dalam sistem layanan kependudukan. 
    Silakan gunakan menu yang tersedia untuk melakukan pengajuan akta kelahiran 
    dan mengakses informasi terkait.
    </p>

    <div class="card p-4 mt-4 mx-auto" style="max-width:600px; background: rgba(255,255,255,0.9); color:black;">

        <h4>Sistem Kependudukan</h4>

        <p>
            Sistem Kependudukan merupakan layanan berbasis web yang digunakan untuk 
            mempermudah masyarakat dalam melakukan pencatatan kelahiran secara online. 
            Melalui sistem ini, pengguna dapat mengajukan pembuatan akta kelahiran, 
            mengisi data secara digital, serta mencetak dokumen secara mandiri.
        </p>

        <a href="upload_berkas.php" class="btn btn-primary mt-2">
            Ajukan Akta Kelahiran
        </a>

    </div>

</div>

</body>
</html>