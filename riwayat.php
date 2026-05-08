<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['id'];

$data = mysqli_query($konek,
"SELECT * FROM akta 
WHERE id_user='$id_user'
ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Riwayat Pengajuan</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-bg">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
<div class="container-fluid px-4">

<a class="navbar-brand text-white" href="#">
    <i class="bi bi-bank2 logo-icon"></i>
<b>Sistem Akta Kelahiran</b>
</a>

<div class="ms-auto">

<a href="dashboard.php"
class="nav-link text-white d-inline me-3">
Beranda
</a>

<a href="logout.php"
class="btn btn-danger btn-sm">
Logout
</a>

</div>
</div>
</nav>

<div class="container mt-5">

<div class="card admin-card">

<div class="card-header text-white">
<h4>Riwayat Pengajuan Akta</h4>
</div>

<div class="table-responsive">

<table class="table admin-table align-middle">

<thead>
<tr>
<th>No</th>
<th>No Akta</th>
<th>Nama</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;
while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['no_akta']; ?></td>

<td><?= $d['nama']; ?></td>

<td>

<?php
if($d['status'] == 'Menunggu'){
    echo "<span class='badge bg-warning'>Menunggu</span>";
}
elseif($d['status'] == 'Diproses'){
    echo "<span class='badge bg-primary'>Diproses</span>";
}
else{
    echo "<span class='badge bg-success'>Selesai Dicetak</span>";
}
?>

</td>

<td>

<?php

if($d['status'] == 'Menunggu'){

    echo "
    <span class='text-warning fw-semibold'>
    Menunggu verifikasi admin
    </span>
    ";

}
elseif($d['status'] == 'Diproses'){

    echo "
    <span class='text-primary fw-semibold'>
    Akta sedang diproses dan dicetak
    </span>
    ";

}
elseif($d['status'] == 'Selesai Dicetak'){

    echo "
    <span class='text-success fw-semibold'>
    Akta selesai dicetak dan siap dikirim
    </span>
    ";

}
elseif($d['status'] == 'Dikirim'){

    echo "
    <a href='diterima.php?id=".$d['id']."'
    class='btn btn-success btn-sm'>

    Sudah Diterima

    </a>
    ";

}
elseif($d['status'] == 'Diterima'){

    echo "
    <span class='text-success fw-bold'>
    Akta telah diterima
    </span>
    ";

}

?>

</td>

</td>

</tr>

<?php } ?>

</tbody>
</table>

</div>
</div>
</div>

</body>
</html>