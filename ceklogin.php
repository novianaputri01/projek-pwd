<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($konek,"SELECT * FROM user 
WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($data)>0){
    $_SESSION['username']=$username;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?pesan=gagal");
}
?>