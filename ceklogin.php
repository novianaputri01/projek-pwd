<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// 🔥 CEK USER BIASA SAJA
$query = mysqli_query($konek,"
SELECT * FROM user 
WHERE username='$username' 
AND password='$password'
AND role='user'
");

$cek = mysqli_num_rows($query);

if($cek > 0){

    $data = mysqli_fetch_assoc($query);

    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    header("Location: dashboard.php");
    exit;

}else{

    header("Location: login.php?pesan=gagal");
}
?>