<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// 🔥 cek username + password + role admin
$query = mysqli_query($konek,"
SELECT * FROM user 
WHERE username='$username' 
AND password='$password'
AND role='admin'
");

$cek = mysqli_num_rows($query);

if($cek > 0){

    $data = mysqli_fetch_assoc($query);

    // 🔥 session
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    // 🔥 masuk ke landing admin
    header("Location: landing_admin.php");
    exit;

}else{

    header("Location: login.php?pesan=gagal_admin");
    exit;
}
?>