<?php 
session_start();

if (!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$pasien = query("SELECT * FROM pasien");

// ketika tombol cari diklik
if(isset($_POST['cari'])){
    $pasien = cari_pasien($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Infit+</title>
</head>
<body>
    
    <h3>Data Pasien</h3>

    <a href="tambah.php" class="btn btn-primary">Tambah Data Pasien</a>
    <br><br>
    <br>

    <div class="container"> 
        <table border="1" cellpadding="10" cellspacing="0" class="table-primary">
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>No. KTP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
            </tr>

            <?php if (empty($pasien)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: red; font-style: italic">Data pasien tidak ditemukan!</p>
                </td>
            </tr>
            <?php endif ; ?>

            <?php $i=1;
            foreach($pasien as $key => $value) :?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="../img/<?= $value['foto']; ?>" width="60"></td>
                <td><?= $value['ktp']; ?></td>
                <td><?= $value['nama']; ?></td>
                <td><?= $value['gender']; ?></td>
                <td><?= $value['tempat_lahir']; ?></td>
                <td><?= $value['tanggal_lahir']; ?></td>
                <td><?= $value['alamat']; ?></td>
                <td><?= $value['telepon']; ?></td>
            </tr>
            <?php endforeach ; ?>

        </table>
    </div>
    <script src="../admin/js/script.js"></script>
</body>
</html>
