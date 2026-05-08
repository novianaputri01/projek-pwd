<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kependudukan</title>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akta Kelahiran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <i class="bi bi-bank2 logo-icon"></i>
            <div>
                <div><b>Sistem Akta Kelahiran</b></div>
                <div class="brand-small">Dinas Kependudukan</div>
            </div>
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
            </ul>
            <!-- TOMBOL LOGIN TERPADU -->
            <a href="login.php" class="btn btn-danger px-4">
                <i class="bi bi-box-arrow-in-right me-2"></i>Masuk / Daftar
            </a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-deco">⚖</div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-badge">Layanan Online Resmi</div>
                <h1>Sistem Pengajuan<br><span>Akta Kelahiran</span><br>Digital</h1>
                <p class="mt-3 mb-4">
                    Layanan online untuk pencatatan dan penerbitan akta kelahiran secara cepat, mudah, dan terpercaya — tanpa perlu antri.
                </p>
                <a href="login.php" class="btn btn-warning px-5 py-3" style="font-size:1rem;">
                    <i class="bi bi-arrow-right-circle me-2"></i>Mulai Pengajuan
                </a>
            </div>
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center mt-5 mt-md-0">
                <div style="text-align:center; opacity:.15; font-size:200px; line-height:1; color:#c9a84c;">
                    <i class="bi bi-qr-code"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<div class="stats-strip">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3 stat-item mb-3 mb-md-0">
                <h3>1.245+</h3><p>Pengguna Terdaftar</p>
            </div>
            <div class="col-6 col-md-3 stat-item mb-3 mb-md-0">
                <h3>2.568+</h3><p>Akta Diterbitkan</p>
            </div>
            <div class="col-6 col-md-3 stat-item">
                <h3>98%</h3><p>Tepat Waktu</p>
            </div>
            <div class="col-6 col-md-3 stat-item">
                <h3>4.9/5</h3><p>Kepuasan Pengguna</p>
            </div>
        </div>
    </div>
</div>

<!-- LAYANAN -->
<section id="layanan" class="section-dark">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-sub">Fitur utama dalam sistem kependudukan digital</p>
        </div>
        <div class="row g-4">
            <?php
            $layanan = [
                ['icon'=>'bi-person-plus','judul'=>'Pendaftaran Akun','desc'=>'Mendaftar menggunakan NIK secara online dengan mudah.'],
                ['icon'=>'bi-file-earmark-text','judul'=>'Pengajuan Akta','desc'=>'Mengisi data kelahiran secara digital dan lengkap.'],
                ['icon'=>'bi-check2-circle','judul'=>'Verifikasi Admin','desc'=>'Admin memverifikasi dan menyetujui pengajuan akta.'],
                ['icon'=>'bi-printer','judul'=>'Cetak Dokumen','desc'=>'Cetak akta langsung dari sistem kapan saja.'],
                ['icon'=>'bi-globe','judul'=>'Akses Online','desc'=>'Dapat diakses kapan saja dan di mana saja.'],
                ['icon'=>'bi-clock-history','judul'=>'Efisiensi Waktu','desc'=>'Mengurangi antrian di kantor pelayanan.'],
            ];
            foreach($layanan as $l): ?>
            <div class="col-md-4 col-sm-6">
                <div class="layanan-card">
                    <div class="icon-wrap">
                        <i class="bi <?= $l['icon'] ?>" style="color:#c9a84c;"></i>
                    </div>
                    <h5><?= $l['judul'] ?></h5>
                    <p><?= $l['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ALUR PROSES -->
<section class="section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title dark-text">Alur Pengajuan</h2>
            <p class="section-sub">Proses mudah dalam 5 langkah</p>
        </div>
        <div class="row justify-content-center g-0">
            <?php
            $alur = [
                ['no'=>'1','icon'=>'bi-person-plus','judul'=>'Daftar Akun','desc'=>'Buat akun dengan NIK'],
                ['no'=>'2','icon'=>'bi-file-earmark-plus','judul'=>'Isi Formulir','desc'=>'Lengkapi data kelahiran'],
                ['no'=>'3','icon'=>'bi-hourglass-split','judul'=>'Proses Verifikasi','desc'=>'Admin memeriksa data'],
                ['no'=>'4','icon'=>'bi-check-circle','judul'=>'Akta Disetujui','desc'=>'Notifikasi akan dikirim'],
                ['no'=>'5','icon'=>'bi-download','judul'=>'Cetak Akta','desc'=>'Unduh & cetak akta'],
            ];
            foreach($alur as $i => $a): ?>
            <div class="col text-center" style="min-width:120px; max-width:200px; position:relative;">
                <?php if($i < count($alur)-1): ?>
                <div style="position:absolute; top:28px; left:60%; width:80%; height:2px; background:linear-gradient(90deg,#0b1f3a,#4fa3d1); z-index:0;"></div>
                <?php endif; ?>
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#0b1f3a,#1e3f6a);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;position:relative;z-index:1;">
                    <i class="bi <?= $a['icon'] ?>" style="color:#c9a84c;font-size:22px;"></i>
                </div>
                <div style="font-size:0.72rem;font-weight:700;color:#7a8fa6;text-transform:uppercase;letter-spacing:1px;"><?= 'Langkah '.$a['no'] ?></div>
                <div style="font-weight:600;color:#0b1f3a;font-size:0.9rem;margin:3px 0;"><?= $a['judul'] ?></div>
                <div style="font-size:0.8rem;color:#7a8fa6;"><?= $a['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
