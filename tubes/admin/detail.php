<?php 
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ./login.php");
    exit;
}
require './functions.php';

// ambil id dari URL
$id = $_GET['id'];

// Query pasien berdasarkan id
$d = query("SELECT * FROM dokter WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Dokter</title>
</head>
<body>
    <div class="container-fluid">
        <h3>Detail Dokter</h3>
        <ul>
            <div class="mb-3"><img src="../img/<?= $d['foto']; ?>" alt="" width="250"></div>
            <div class="mb-3">Nama Dokter : <?= $d['nama_dokter']; ?></div >
            <div class="mb-3">Jenis Kelamin : <?= $d['gender']; ?></div>
            <div class="mb-3">No Telepon : <?= $d['no_tlp']; ?></div>
            <div class="mb-3">Lulusan : <?= $d['kerja']; ?></div>
            <div class="mb-3">Pengalman kerja : <?= $d['kerja']; ?></div>
            <div class="mb-3">
                <a href="./ubah.php?id=<?= $d['id']; ?>" class="btn badge bg-info">ubah</a> | 
                <a href="./hapus.php?id=<?= $d['id']; ?>" onclick="return confirm ('apakah anda yakin?');"  class="btn badge bg-info">hapus</a>
            </div>
            <div class="mb-3">
                <a href="./index.php" class="btn btn-primary">kembali ke data dokter</a>
            </div>
        </ul>
    </div>
</body>
</html>