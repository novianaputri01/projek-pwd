<?php
include 'koneksi.php';

$id = $_GET['id'];

// Hapus data berdasarkan id
mysqli_query($konek, "DELETE FROM akta WHERE id='$id'");

// Kembali ke halaman admin
echo "
<script>
alert('Data berhasil dihapus!');
window.location='landing_admin.php';
</script>
";
?>