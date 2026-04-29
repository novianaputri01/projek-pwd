<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($konek,"SELECT * FROM akta WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Akta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="akta">

    <!-- 🔥 NOMOR AKTA (POSISI BEBAS) -->
    <div class="noakta">
        No: <b><?= $data['no_akta']; ?></b>
    </div>

    <!-- 🔥 JUDUL -->
    <div class="judul">
        <h3>PENCATATAN SIPIL</h3>
        <h4>KUTIPAN AKTA KELAHIRAN</h4>
    </div>

    <!-- 🔥 ISI (TETAP NORMAL / RAPI) -->
    <div class="isi">

        <p>Berdasarkan Akta Kelahiran Nomor: <b><?= $data['no_akta']; ?></b></p>

        <p>Bahwa di <b><?= $data['tempat']; ?></b></p>

        <p>Pada hari <b><?= $data['hari']; ?></b>, tanggal 
        <b><?= date('d-m-Y', strtotime($data['tanggal'])); ?></b></p>

        <p>Telah lahir seorang anak bernama <b><?= $data['nama']; ?></b></p>

        <p>Jenis kelamin: <b><?= $data['jk']; ?></b></p>

        <p>Anak ke <b><?= $data['anak_ke']; ?></b></p>

        <br>

        <p>Dari pasangan:</p>
        <p>Ayah: <b><?= $data['ayah']; ?></b></p>
        <p>Ibu: <b><?= $data['ibu']; ?></b></p>

    </div>

    <!-- 🔥 TTD -->
    <div class="ttd">
        <p>Bandung, <?= date('d-m-Y'); ?></p>
        <p>Kepala Dinas</p>

        <br><br><br>

        <p><b>(Nama Pejabat)</b></p>
    </div>

</div>

<div style="text-align:center; margin-top:20px;">
    <button onclick="window.print()" class="btn btn-primary">Cetak</button>
</div>

</body>
</html>