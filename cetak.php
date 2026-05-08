<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($konek,"SELECT * FROM akta WHERE id='$id'"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<style>

body{
    background:#dcdcdc;
    font-family:Arial, sans-serif;
    margin:0;
    padding:20px;
}

.akta{
    width:850px;
    background:white;
    margin:auto;
    padding:45px 60px;
    box-sizing:border-box;
    color:#000;
}

/* JUDUL */
.judul{
    text-align:center;
    line-height:1.2;
}

.judul h2{
    margin:0;
    font-size:28px;
}

..judul h3{
    margin:10px 0 0;
    font-size:21px;
    text-decoration:underline;
}

.judul i{
    font-size:14px;
    color:#444;
}

/* ISI */
.isi{
    margin-top:35px;
    font-size:17px;
    line-height:1.6;
}

.row-akta{
    display:flex;
    margin-bottom:14px;
}

.kiri{
    width:48%;
}

.kanan{
    width:52%;
}

.en{
    font-style:italic;
    color:#555;
    font-size:15px;
}

/* TTD */
.ttd{
    width:300px;
    margin-left:auto;
    margin-top:40px;
    font-size:16px;
}

.nama-pejabat{
    margin-top:45px;
    font-weight:bold;
    text-decoration:underline;
}

/* FOOTER */
.footer{
    margin-top:45px;
    text-align:center;
    font-size:14px;
}

/* BUTTON */
.no-print{
    text-align:center;
    margin-top:20px;
}

.btn{
    padding:10px 18px;
    border:none;
    border-radius:8px;
    text-decoration:none;
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin:5px;
}

.btn-print{
    background:green;
}

.btn-back{
    background:#0d6efd;
}

/* PRINT */
@media print{

    @page{
        size:A4;
        margin:10mm;
    }

    body{
        background:white;
        padding:0;
    }

    .akta{
        width:100%;
        padding:0;
        box-shadow:none;
    }

    .no-print{
        display:none;
    }

}

</style>
</head>

<body>

<div class="akta">

    <!-- JUDUL -->
    <div class="judul">

        <h2>REPUBLIK INDONESIA</h2>

        <h3>PENCATATAN SIPIL</h3>
        <i>REGISTRY OFFICE</i>

        <br><br>

        <h3>WARGA NEGARA INDONESIA</h3>
        <i>NATIONALITY INDONESIA</i>

        <br><br>

        <h3>KUTIPAN AKTA KELAHIRAN</h3>
        <i>EXCERPT OF BIRTH CERTIFICATE</i>

    </div>

    <!-- ISI -->
    <div class="isi">

        <div class="row-akta">
            <div class="kiri">
                Berdasarkan Akta Kelahiran Nomor<br>
                <span class="en">By virtue of Birth Certificate Number</span>
            </div>

            <div class="kanan">
                : <b><?= $data['no_akta']; ?></b>
            </div>
        </div>

        <div class="row-akta">
            <div class="kiri">
                bahwa di <b><?= strtoupper($data['tempat']); ?></b><br>
                <span class="en">that in</span>
            </div>
        </div>

        <div class="row-akta">
            <div class="kiri">
                pada tanggal <b><?= date('d-m-Y', strtotime($data['tanggal'])); ?></b><br>
                <span class="en">on date</span>
            </div>
        </div>

        <div class="row-akta">
            <div class="kiri">
                telah lahir <b><?= strtoupper($data['nama']); ?></b><br>
                <span class="en">was born</span>
            </div>
        </div>

        <div class="row-akta">
            <div class="kiri">
                anak ke <b><?= $data['anak_ke']; ?></b>,
                <b><?= strtoupper($data['jk']); ?></b>
                dari ayah <b><?= strtoupper($data['ayah']); ?></b>
                dan ibu <b><?= strtoupper($data['ibu']); ?></b>

                <br>
            </div>
        </div>

    </div>

    <!-- TTD -->
    <div class="ttd">

        Kutipan ini dikeluarkan di <b>YOGYAKARTA</b><br>
        <span class="en">The excerpt is issued in YOGYAKARTA</span>

        <br><br>

        pada tanggal <b><?= date('d-m-Y'); ?></b><br>
        <span class="en">on date</span>

        <br><br>

        Pejabat Pencatatan Sipil<br>
        <span class="en">Officer of Civil Registration</span>

        <div class="nama-pejabat">
            Drs. H. Budi Santoso, M.Si
            <br>
            NIP. 196204151993031003
        </div>

    </div>

</div>

<?php if($_SESSION['role']=='user'){ ?>

<div class="no-print" style="text-align:center; margin-top:30px;">

    <a href="alamat_kirim.php?id=<?= $data['id']; ?>"
       class="btn btn-warning">

       Ajukan Cetak

    </a>

    <a href="dashboard.php"
       class="btn btn-primary">

       Kembali

    </a>

</div>

<?php } ?>

<?php if($_SESSION['role']=='admin'){ ?>

<div class="no-print">

    <button onclick="window.print()" class="btn btn-print">
        Cetak Akta
    </button>

    <a href="landing_admin.php" class="btn btn-back">
        Kembali
    </a>

</div>

<?php } ?>

</body>
</html>