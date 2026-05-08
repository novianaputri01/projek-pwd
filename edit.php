<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_array(
    mysqli_query($konek, "SELECT * FROM akta WHERE id='$id'")
);

/* PROSES EDIT */
if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jk = $_POST['jk'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $anak_ke = $_POST['anak_ke'];
    $alamat = $_POST['alamat'];

    mysqli_query($konek,"
    UPDATE akta SET

    nama='$nama',
    tempat='$tempat',
    tanggal='$tanggal',
    jk='$jk',
    ayah='$ayah',
    ibu='$ibu',
    anak_ke='$anak_ke',
    alamat='$alamat'

    WHERE id='$id'
    ");

    echo "
    <script>
    alert('Data berhasil diubah!');
    window.location='landing_admin.php';
    </script>
    ";

    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Akta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-bg">

<div class="container mt-5">

    <div class="card p-4 shadow-lg">

        <h3 class="mb-4 text-center">
            Edit Data Akta
        </h3>

        <form method="POST">

            <div class="row">

                <!-- KIRI -->
                <div class="col-md-6">

                    <label class="fw-semibold">
                        Nama Anak
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control mb-3"
                           value="<?= $data['nama']; ?>"
                           required>

                    <label class="fw-semibold">
                        Tempat Lahir
                    </label>

                    <input type="text"
                           name="tempat"
                           class="form-control mb-3"
                           value="<?= $data['tempat']; ?>"
                           required>

                    <label class="fw-semibold">
                        Tanggal Lahir
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control mb-3"
                           value="<?= $data['tanggal']; ?>"
                           required>

                    <label class="fw-semibold">
                        Jenis Kelamin
                    </label>

                    <select name="jk"
                            class="form-control mb-3">

                        <option value="Laki-laki"
                        <?= $data['jk']=='Laki-laki' ? 'selected' : ''; ?>>
                        Laki-laki
                        </option>

                        <option value="Perempuan"
                        <?= $data['jk']=='Perempuan' ? 'selected' : ''; ?>>
                        Perempuan
                        </option>

                    </select>

                </div>

                <!-- KANAN -->
                <div class="col-md-6">

                    <label class="fw-semibold">
                        Nama Ayah
                    </label>

                    <input type="text"
                           name="ayah"
                           class="form-control mb-3"
                           value="<?= $data['ayah']; ?>"
                           required>

                    <label class="fw-semibold">
                        Nama Ibu
                    </label>

                    <input type="text"
                           name="ibu"
                           class="form-control mb-3"
                           value="<?= $data['ibu']; ?>"
                           required>

                    <label class="fw-semibold">
                        Anak Ke
                    </label>

                    <input type="text"
                           name="anak_ke"
                           class="form-control mb-3"
                           value="<?= $data['anak_ke']; ?>">

                    <label class="fw-semibold">
                        Alamat
                    </label>

                    <textarea name="alamat"
                              class="form-control mb-3"
                              required><?= $data['alamat']; ?></textarea>

                </div>

            </div>

            <button type="submit"
                    name="submit"
                    class="btn btn-warning w-100">

                Simpan Perubahan

            </button>

        </form>

    </div>

</div>

</body>
</html>