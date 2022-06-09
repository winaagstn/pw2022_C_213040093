<?php 
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ./login.php");
    exit;
}
require './functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])){
    header("Location: ./index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query pasien berdasarkan id
$dokter = query("SELECT * FROM dokter WHERE id = $id");

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

    <title>Ubah Data Dokter</title>
</head>
<body>
    <div class="container-fluid">
    <h3>Form Ubah Data Dokter</h3>
    <form action="" method="post" enctype="multipart/form-data">
    <?php foreach ($dokter as $d) :?>
        <input type="hidden" name="id" value="<?= $d['id']; ?>">
        <ul>
        
            <div class="mb-3">
                <div class="mb-3">
                    <label for="nama" class="form-label">
                        Nama :
                        <input type="text" class="form-control" name="nama_dokter" required value="<?= $d['nama_dokter']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                Jenis Kelamin :
                    <select class="form-select form-select-md" name="gender" aria-label=".form-select-md" width="50%" >
                        <option selected>-Pilih-</option>
                        <option value="1">1. Laki-Laki</option>
                        <option value="2">2. Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_tlp" class="form-label">
                        No Telepon :
                        <input type="text" class="form-control" name="no_tlp" required value="<?= $d['no_tlp']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                    <label for="lulusan" class="form-label">
                        Lulusan :
                        <input type="text" class="form-control" name="lulusan" required value="<?= $d['lulusan']; ?>">
                    </label>     
                </div>
                <div class="mb-3">
                    <label for="kerja" class="form-label">
                        Pengalaman Kerja :
                        <input type="text" class="form-control" name="kerja" required value="<?= $d['kerja']; ?>">
                    </label>     
                </div class>
                <div>
                    <input type="hidden" name="foto_lama" value="<?= $d['foto']; ?>">
                    <label for="foto" class="form-label">
                        Foto :
                        <input type="file" class="form-control" name="foto" class="foto" onchange="previewImage()">
                    </label>
                        <img src="../img/<?= $d['foto']; ?>" alt="" width="120" style="display: block;" class="img-preview mb-2 mt-2">
                </div>
                <?php endforeach ;?>
                <div class="mb-3">
                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data!</button>
                </div>
            </ul>
        </div>
    </form>
<script src="../admin/js/script.js"></script>
</body>
</html>