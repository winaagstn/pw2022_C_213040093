<?php 
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ./login.php");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InFit+</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"/>
      
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <link rel="stylesheet" href="../css/stylesheet.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg ">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../img/infit.png" alt="" width="50">
            InFit+
        </a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <form action="" class="me-5">
        <a href="./profil_user.php" class="user-icon link-light"> <i class="far fa-user fa-2x"></i> </a>
      </form>
    </nav>

    <!-- home -->
    <div class="container-fluid banner" id="home">
      <div class="container text-start">
        <h6 class="display-6">Rawat gigimu bersama Kami!</h6>
        <a href="#layanan">
            <br>
          <button type="button" class="btn btn-success btn-lg">
            Jelajahi lebih lanjut!
          </button>
        </a>
      </div>
    </div>

    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Fasilitas</h2>
        
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-newspaper fa-5x"></i></span>
            <a href="./artikel.php"><h3 class="mt-3">Artikel</h3></a>
            <p>
              Lihat artikel tentang gigi, perawatan dan kesehatannya disini!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-tooth fa-5x"></i></i></span>
            <a href="./layanan.php"><h3 class="mt-3">Layanan</h3></a>
            <p>
              Lihat layanan kami untuk mengetahui lebih jelasnya disini!
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-comment-medical fa-5x"></i></span>
            <a href="./chat_dokter.php  "><h3 class="mt-3">Chat Dokter</h3></a>
            <p>
                Chat dokter untuk konsultasi tentang gigimu!
            </p>
          </div>
          </div>
        </div>
      </div>
    </div>


    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-2 text-center" id="tentang">Tentang</h2>
        <p class="text-center" class="display-5">
          InFit+ adalah layanan kesehatan gigi
        </p>
        <div class="clearfix pt-5">
          <img
            src="../img/ProfilTubes.png" width="300" height="300" class="col-md-6 float-md-end mb-4 ms-4 crop-img"/> 
           
          <p>
            InFit+ berarti Infinity Fit atau Kesehatan yang tidak terbatas
          </p>
          <p>
            Kami memiliki beberapa dokter ternama dan terpercaya untuk kesehatan gigimu
          </p>
          <p>
            Kami telah berdiri pada tahun 2021 di Bandung, Jawa Barat
          </p>
          <p>
            Semoga senang dengan website kami
          </p>

        </div>
      </div>
    </div>
   
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#home">InFit+</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
              <li><a class="email" href="#"><i class="fas fa-envelope"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></i></a></li>
              <li><a class="line" href="#"><i class="fab fa-line"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
  </body>
</html>