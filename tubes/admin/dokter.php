<?php 
session_start();

if (!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$dokter = query("SELECT * FROM dokter");

// ketika tombol cari diklik
if(isset($_POST['cari'])){
    $dokter = cari($_POST['keyword']);
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
     
    <h3>Data Dokter</h3>

    <a href="tambah.php" class="btn btn-primary">Tambah Data Dokter</a>
    <br><br>

    <form action="" method="get">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
    </form>
    <br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0" class="table-primary">
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            <?php if (empty($dokter)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: red; font-style: italic">Data dokter tidak ditemukan!</p>
                </td>
            </tr>
            <?php endif ; ?>

            <?php $i=1;
            foreach($dokter as $key => $value) :?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="../img/<?= $value['foto']; ?>" width="60"></td>
                <td><?= $value['nama_dokter']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $value['id']; ?>" style="color: white;" class="btn btn-info">Lihat Detail</a>
                </td>
            </tr>
            <?php endforeach ; ?>

        </table>
    </div>
    <script src="../admin/js/script.js"></script>
</body>
</html>
