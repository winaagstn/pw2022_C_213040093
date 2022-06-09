<?php 
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ./login.php");
    exit;
}
require './functions.php';

// cek apakah tombol tambah telah ditekan
if(isset($_POST['tambah'])){
    if (tambah($_POST) > 0){
        echo "<script>
            alert ('data berhasil ditambahkan');
            document.location.href = './index.php';
            </script>";
    }else {
        echo "data gagal ditambahkan!";
    }
}   


?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/stylesheet.css" rel="stylesheet" />
    <title>Tambah Data Dokter</title>
</head>
<body>
    <div class="container-fluid">
    <h3>Tambah Data Dokter</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <div class="mb-3">
                <label for="nama_dokter" class="form-label">
                    Nama Dokter :
                    <input type="text" class="form-control" name="nama_dokter" required autocomplete="off">
                </label>     
            </div>
            <div class="mb-3">
                Jenis Kelamin :
            <select class="form-select form-select-md" name="gender" aria-label=".form-select-md" width="50%" >
                <option>-Pilih-</option>
                <option value="Laki-Laki">1. Laki-Laki</option>
                <option value="Perempuan">2. Perempuan</option>
            </select>
            </div>
            <div class="mb-3">   
                <label for="no_tlp" class="form-label">
                    No. Telepon :
                    <input type="text" class="form-control"name="no_tlp" autocomplete="off">
                </label>     
            </div> 
            <div class="mb-3">
                <label for="lulusan" class="form-label">
                    Lulusan :
                    <input type="text" class="form-control" name="lulusan">
                </label>     
            </div>
            <div class="mb-3">
                <label for="kerja" class="form-label">
                    Pengalaman Kerja :
                    <input type="text" class="form-control" name="kerja" required autocomplete="off">
                </label>     
            </div>
                <label for="foto" class="form-label">
                    Foto :
                    <input type="file" class="form-control" name="foto" class="foto" onchange="previewImage()">
                </label>
                    <img src="../img/nophoto.jpg" alt="" width="120" style="display:block;" class="img-preview">
            </div>
            <div class="mb-3">
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data!</button>
            </div>
        </ul>
    </div>
    </form>
<script src="./js/script.js"></script>
</body>
</html>