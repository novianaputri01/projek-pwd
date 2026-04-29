<?php
$konek = mysqli_connect("localhost","root","","cobaprojek");

if(!$konek){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>