<?php 
require './functions.php';

if(isset($_POST['tambah'])){
    if (tambah($_POST) > 0){
        echo "<script>
            alert ('data berhasil ditambahkan');
            document.location.href = './registrasi.php';
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
    <title>Tambah Data Pasien</title>
</head>
<body>
    <div class="container-fluid">
    <h3>Form Tambah User Baru</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <div class="mb-3">
                <label for="ktp" class="form-label">
                    No. KTP : 
                    <input type="text" class="form-control" name="ktp" autofocus required>
                </label>     
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">
                    Nama :
                    <input type="text" class="form-control" name="nama" required autocomplete="off">
                </label>     
            </div>
            <div class="mb-3">
                Jenis Kelamin :
            <select class="form-select form-select-md" aria-label=".form-select-md" width="50%" >
                <option selected>-Pilih-</option>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
            </select>
            </div>
            <div class="mb-3">   
                <label for="tempat_lahir" class="form-label">
                    Tempat Lahir :
                    <input type="text" class="form-control"name="tempat_lahir" autocomplete="off">
                </label>     
            </div> 
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">
                    Tanggal Lahir :
                    <input type="date" class="form-control" name="tanggal_lahir">
                </label>     
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">
                    Alamat :
                    <input type="text" class="form-control" name="alamat" required autocomplete="off">
                </label>     
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">
                    No. Telepon :
                    <input type="text" class="form-control" name="telepon" required autocomplete="off">
                </label>    
            </div> 
            <div class="mb-3">
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
<script src="../admin/js/script.js"></script>
</body>
</html>