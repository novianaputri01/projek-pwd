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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-bg">

<!-- 🔥 NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">

        <a class="navbar-brand" href="#">
            <b>Sistem<span class="mate">Kependudukan</span></b>
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form_tambah.php">Pengajuan Akta</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Riwayat</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-light ms-2" href="logout.php">Logout</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<!-- 🔥 KONTEN -->
<div class="container text-center text-white mt-5">

    <h2 class="fw-bold">Selamat Datang</h2>
    <h4 class="mb-3"><?= $_SESSION['username']; ?></h4>

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

        <a href="form_tambah.php" class="btn btn-primary mt-2">
            Ajukan Akta Kelahiran
        </a>

    </div>

</div>

</body>
</html>