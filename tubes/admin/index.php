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
<body class="bg-secondary">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg ps-5 ">
        <a class="navbar-brand" href="#">
            <img src="../img/infit.png" alt="" width="50">
            InFit+
        </a>
        <form action="" class="me-5">
        <a href="logout.php" class="btn btn-outline-danger mt-3 me-5">Logout</a>
        </form>
    </nav>
    <div class="atas ps-5">
    <br>
    </div>

    <div class="bg-secondary ps-5 pt-10">
    <a href="dokter.php"><button type="button" class="btn btn-success btn-lg ">Data Dokter</button></a>
    <a href="pasien.php"><button type="button" class="btn btn-warning btn-lg ">Data Pasien</button></a>
    </div>

    
</body>
</html>
