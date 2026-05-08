<?php
session_start();
if(isset($_SESSION['username'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
        header("Location: landing_admin.php"); exit;
    }
    header("Location: dashboard.php"); exit;
}
$pesan = $_GET['pesan'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk — Sistem Akta Kelahiran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-bg">

<?php if($pesan == 'gagal_admin'): ?>

<div class="notif-wrap">
    <div class="notif-toast err">

        <div class="notif-icon">❌</div>

        <div>
            <div class="notif-title">
                Akses Ditolak
            </div>

            <div class="notif-msg">
                Hanya admin yang dapat login.
            </div>
        </div>

    </div>
</div>

<?php endif; ?>

<div class="auth-card">
    <div class="auth-logo">
        <i class="bi bi-bank2"></i>
        <h4>Sistem Akta Kelahiran</h4>
        <p>Dinas Kependudukan & Pencatatan Sipil</p>
    </div>

    <!-- ROLE TABS -->
    <div class="role-tabs" id="roleTabs">
        <button class="role-tab active" onclick="switchRole('pengguna')" id="tabPengguna">
            <i class="bi bi-person me-1"></i>Pengguna
        </button>
        <button class="role-tab" onclick="switchRole('admin')" id="tabAdmin">
            <i class="bi bi-shield-lock me-1"></i>Admin
        </button>
    </div>

    <!-- FORM PENGGUNA -->
    <form action="ceklogin.php" method="POST" id="formPengguna">
        <input type="hidden" name="role" value="pengguna">
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2">
            <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
        </button>
    </form>

    <!-- FORM ADMIN -->
    <form action="ceklogin_admin.php" method="POST" id="formAdmin" style="display:none;">
        <input type="hidden" name="role" value="admin">
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username Admin" required>
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password Admin" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2">
            <i class="bi bi-shield-check me-2"></i>Masuk sebagai Admin
        </button>
    </form>

    <a href="index.php" class="btn btn-outline-back w-100 mt-1">
        <i class="bi bi-arrow-left me-1"></i>Kembali ke Beranda
    </a>

    <p id="linkDaftar" class="text-center mt-3" style="font-size:0.85rem; color:#7a8fa6;">
        Belum punya akun? <a href="register.php" style="color:#0b1f3a; font-weight:600;">Daftar Sekarang</a>
    </p>
</div>

<script>
function switchRole(role) {
    const isAdmin = role === 'admin';
    document.getElementById('formPengguna').style.display = isAdmin ? 'none' : '';
    document.getElementById('formAdmin').style.display   = isAdmin ? '' : 'none';
    document.getElementById('tabPengguna').classList.toggle('active', !isAdmin);
    document.getElementById('tabAdmin').classList.toggle('active', isAdmin);
    document.getElementById('linkDaftar').style.display = isAdmin ? 'none' : '';
}
function closeToast(id) {
    const el = document.getElementById(id);
    el.style.animation = 'slideOut 0.3s ease forwards';
    setTimeout(() => el.remove(), 300);
}
setTimeout(() => {
    const el = document.getElementById('toastErr');
    if(el) closeToast('toastErr');
}, 4000);
</script>
</body>
</html>