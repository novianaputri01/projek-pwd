<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-bg">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container-fluid px-4">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center text-white" href="#">
            <i class="bi bi-bank2 logo-icon me-2"></i>

            <div>
                <b>Admin Kependudukan</b><br>
                <small>Dinas Pencatatan Sipil</small>
            </div>
        </a>

        <!-- MENU -->
        <div class="ms-auto d-flex align-items-center">

            <a href="landing_admin.php"
               class="nav-link text-white me-3">
               Dashboard
            </a>

            <a href="logout.php"
               class="btn btn-danger btn-sm px-3">
               Logout
            </a>

        </div>

    </div>
</nav>

<!-- CONTENT -->
<div class="container-fluid mt-4">

<div class="admin-card">
    <div class="admin-card mt-4">

<div class="table-responsive p-0">

<table class="table admin-table align-middle w-100">

<thead>
<tr>
    <th>No</th>
    <th>No Akta</th>
    <th>Nama Anak</th>
    <th>TTL</th>
    <th>JK</th>
    <th>Orang Tua</th>
    <th>Status</th>
    <th>Alamat Pengiriman</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;
$data = mysqli_query($konek,"SELECT * FROM akta");

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td>
    <small><?= $d['no_akta']; ?></small>
</td>

<td>
    <b><?= $d['nama']; ?></b>
</td>

<td>
    <?= $d['tempat']; ?><br>
    <small class="text-muted">
        <?= $d['tanggal']; ?>
    </small>
</td>

<td><?= $d['jk']; ?></td>

<td>
    <small>
        Ayah : <?= $d['ayah']; ?><br>
        Ibu : <?= $d['ibu']; ?>
    </small>
</td>

<td>

<?php

if($d['status'] == 'Menunggu'){

    echo "
    <span class='badge bg-warning'>
    Menunggu
    </span>
    ";

}
elseif($d['status'] == 'Diproses'){

    echo "
    <span class='badge bg-primary'>
    Diproses
    </span>
    ";

}
elseif($d['status'] == 'Selesai Dicetak'){

    echo "
    <span class='badge bg-success'>
    Selesai Dicetak
    </span>
    ";

}
elseif($d['status'] == 'Dikirim'){

    echo "
    <span class='badge bg-info'>
    Dikirim
    </span>
    ";

}
elseif($d['status'] == 'Diterima'){

    echo "
    <span class='badge bg-dark'>
    Diterima
    </span>
    ";

}
?>

</td>

<td>

<?php
if($d['alamat_kirim'] != ''){

    echo $d['alamat_kirim'];

}else{

    echo "
    <span class='text-muted'>
    Belum mengisi alamat
    </span>
    ";

}
?>

</td>

<td>

    <!-- LIHAT AKTA -->
    <a href="cetak.php?id=<?= $d['id']; ?>"
       target="_blank"
       class="btn btn-primary btn-sm mb-1">

       <i class="bi bi-eye"></i>
    </a>

    <!-- EDIT -->
    <a href="edit.php?id=<?= $d['id']; ?>"
       class="btn btn-warning btn-sm mb-1">

       <i class="bi bi-pencil-square"></i>
    </a>

    <!-- HAPUS -->
    <a href="hapus.php?id=<?= $d['id']; ?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Yakin hapus data?')">

       <i class="bi bi-trash"></i>
    </a>

   <?php

if($d['status'] == 'Menunggu'){
?>

<a href="proses.php?id=<?= $d['id']; ?>"
class="btn btn-primary btn-sm">
Proses
</a>

<?php
}
elseif($d['status'] == 'Diproses'){
?>

<a href="selesai.php?id=<?= $d['id']; ?>"
class="btn btn-success btn-sm">
Selesai Cetak
</a>

<?php
}
elseif($d['status'] == 'Selesai Dicetak'){
?>

<a href="kirim.php?id=<?= $d['id']; ?>"
class="btn btn-info btn-sm">
Kirim
</a>

<?php
}
elseif($d['status'] == 'Dikirim'){
?>

<span class="badge bg-info">
Menunggu Diterima
</span>

<?php
}
elseif($d['status'] == 'Diterima'){
?>

<span class="badge bg-success">
Selesai
</span>

<?php } ?>
</td>

</tr>

<?php } ?>

</tbody>
</table>

</div>
</div>