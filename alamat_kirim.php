<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($konek,"SELECT * FROM akta WHERE id='$id'")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alamat Pengiriman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

    body{
        background:#0d2a52;
    }

    .card{
        border-radius:20px;
    }

    </style>
</head>

<body>

<div class="container mt-5">

<div class="card p-4 shadow">

<h3 class="mb-4 text-center">
Isi Alamat Pengiriman
</h3>

<form action="proses_kirim.php" method="POST">

<input type="hidden" name="id" value="<?= $data['id']; ?>">

<label class="fw-bold">
Alamat Lengkap
</label>

<textarea
name="alamat_kirim"
class="form-control mb-3"
rows="5"
required
placeholder="Masukkan alamat lengkap rumah..."></textarea>

<button class="btn btn-primary w-100">
Ajukan Pengiriman
</button>

</form>

</div>
</div>

</body>
</html>