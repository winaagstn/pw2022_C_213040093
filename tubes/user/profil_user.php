<?php 
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ./login.php");
    exit;
}
require 'functions.php';
$pasien = query("SELECT * FROM pasien");


// cek apakah tombol ubah telah ditekan
if(isset($_POST['ubah'])){
    if (ubah($_POST) > 0){
        echo "<script>
            alert ('data berhasil diubah!');
            document.location.href = './index.php';
            </script>";
    }else {
        echo "data gagal diubah!";
    }
}   


?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/stylesheet.css" rel="stylesheet" />
    

    <title>Ubah Data Pasien</title>
</head>
<body>
    <div class="container-fluid">
    <h3>Data Pasien</h3>
    <?php foreach($pasien as $p)?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" <?= $p['id']; ?>>
        <ul>
            <div class="mb-3">
            <img src="../img/<?= $p['foto']; ?>" alt="" width="200" style="display: block;" class="img-preview mb-2 mt-2">

                <label for="ktp" class="form-label">
                    No. KTP : 
                    <input type="text" class="form-control" name="ktp" autofocus required value="<?= $p['ktp']; ?>">
                </label>     
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">
                        Nama :
                        <input type="text" class="form-control" name="nama" required value="<?= $p['nama']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">
                    Jenis Kelamin :
                    <input type="text" class="form-control" name="gender" required value="<?= $p['gender']; ?>">
                    </label>
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">
                        Tempat Lahir :
                        <input type="text" class="form-control" name="tempat_lahir" required value="<?= $p['tempat_lahir']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">
                        Tanggal Lahir :
                        <input type="date" class="form-control" name="tanggal_lahir" required value="<?= $p['tanggal_lahir']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        Alamat :
                        <input type="text" class="form-control" name="alamat" required value="<?= $p['alamat']; ?>">
                    </label>     
                </div class>
                <div class="mb-3">
                    <label for="telepon" class="form-label">
                        No. Telepon :
                        <input type="text" class="form-control" name="telepon" required value="<?= $p['telepon']; ?>">
                    </label>     
                </div class="mb-3">
                <div>
                    <input type="hidden" name="foto_lama" value="<?= $p['foto']; ?>">
                    <label for="foto" class="form-label">
                        Ubah Foto :
                        <input type="file" class="form-control" name="foto" class="foto" onchange="previewImage()">
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" name="ubah" class="btn btn-primary">Perbaharui Profil!</button>
                </div>
                <div class="mb-3">
                    <a href="./logout.php" class="btn btn-outline-danger">Logout</a>
                </div>
            </ul>
        </div>
    </form>
    <script src="../admin/js/script.js"></script>
</body>
</html>