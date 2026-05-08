<?php
include 'koneksi.php';

session_start();

$id_user = $_SESSION['id'];

// CEK JUMLAH PENGAJUAN AKTIF
$cek_pengajuan = mysqli_query($konek,
"SELECT * FROM akta
WHERE id_user='$id_user'
AND status != 'Diterima'");

if(mysqli_num_rows($cek_pengajuan) >= 3){

    header("Location: form_tambah.php?pesan=limit");
    exit;
}


$username = $_SESSION['username'];

// DATA FORM
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$alamat = $_POST['alamat'];
$anak_ke = $_POST['anak_ke'];
$hari = $_POST['hari'];
$tanggal_catat = $_POST['tanggal_catat'];
$alasan = $_POST['alasan'];
$alamat_kirim = $_POST['alamat_kirim'];

// NOMOR AKTA
$no_akta = "AKTA-" . date("Ymd") . "-" . rand(100,999);


// SIMPAN DATABASE
$query = mysqli_query($konek,"
INSERT INTO akta
(
username,
id_user,
no_akta,
nama,
tempat,
tanggal,
jk,
ayah,
ibu,
alamat,
anak_ke,
hari,
tanggal_catat,
alasan,
alamat_kirim,
status
)

VALUES
(
'$username',
'$id_user',
'$no_akta',
'$nama',
'$tempat',
'$tanggal',
'$jk',
'$ayah',
'$ibu',
'$alamat',
'$anak_ke',
'$hari',
'$tanggal_catat',
'$alasan',
'$alamat_kirim',
'Menunggu'
)
");

// CEK ERROR
if(!$query){
    die(mysqli_error($konek));
}

// AMBIL ID TERAKHIR
$id = mysqli_insert_id($konek);

// BUKA AKTA ONLINE
header("Location: cetak.php?id=$id");
exit;
?>