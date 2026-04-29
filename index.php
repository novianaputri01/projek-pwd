<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kependudukan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- 🔥 NAVBAR CLEAN -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Sistem<span class="mate">Kependudukan</span>
        </a>

        <div class="ms-auto d-flex align-items-center">

            <?php if(isset($_SESSION['username'])){ ?>
                <a href="dashboard.php" class="btn btn-light me-2">Dashboard</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            <?php } else { ?>
                <a href="login.php" class="btn btn-light me-2">Login</a>
                <a href="register.php" class="btn btn-primary">Daftar</a>
            <?php } ?>

        </div>

    </div>
</nav>

<!-- 🔥 HERO -->
<section class="hero">
    <div class="hero-overlay text-center">

        <h1 class="fw-bold mb-3">Sistem Pendataan Akta Kelahiran</h1>
        <p class="mb-4">Layanan online untuk pencatatan kelahiran secara cepat dan efisien</p>

        <a href="#layanan" class="btn btn-primary px-4">Lihat Layanan</a>

    </div>
</section>

<!-- 🔥 LAYANAN -->
<section id="layanan" class="container py-5 text-center">

    <h2 class="fw-bold mb-2">Layanan Sistem</h2>
    <p class="text-muted mb-4">Fitur utama dalam sistem kependudukan</p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Pendaftaran Akun</h5>
                <p>Mendaftar menggunakan NIK secara online.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Pengajuan Akta</h5>
                <p>Mengisi data kelahiran secara digital.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Penerbitan Akta</h5>
                <p>Akta dibuat otomatis oleh sistem.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Cetak Dokumen</h5>
                <p>Cetak akta langsung dari sistem.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Akses Online</h5>
                <p>Dapat diakses kapan saja dan dimana saja.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold">Efisiensi Waktu</h5>
                <p>Mengurangi antrian di kantor pelayanan.</p>
            </div>
        </div>

    </div>

</section>

<!-- 🔥 PENJELASAN -->
<section class="bg-light py-5">
    <div class="container">

        <div class="row align-items-center">

    <!-- KIRI -->
    <div class="col-md-6 mb-4">
        <h3 class="fw-bold mb-3">Tentang Sistem</h3>
        <p>
            Sistem Kependudukan adalah layanan berbasis web yang mempermudah 
            masyarakat dalam proses pencatatan kelahiran secara digital tanpa 
            harus datang langsung ke kantor pelayanan.
        </p>
    </div>

    <!-- KANAN -->
    <div class="col-md-6 text-md-end">
        <h3 class="fw-bold mb-3">Tujuan Sistem</h3>
        <ul class="list-unstyled">
            <li>Mempermudah pengajuan akta</li>
            <li>Meningkatkan efisiensi layanan</li>
            <li>Mengurangi antrian</li>
            <li>Layanan cepat & transparan</li>
        </ul>
    </div>

</div>

        <div class="text-center mt-4">
            <h3 class="fw-bold mb-2">Manfaat</h3>
            <p class="text-muted">
                Sistem ini membantu masyarakat mengakses layanan kapan saja 
                serta mencetak dokumen secara mandiri dengan mudah.
            </p>
        </div>

    </div>
</section>

<!-- 🔥 FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <small>© 2026 Sistem Kependudukan</small>
</footer>

</body>
</html>