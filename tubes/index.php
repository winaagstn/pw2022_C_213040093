
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InFit+</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"/>
      
    <link
      rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <link rel="stylesheet" href="./css/stylesheet.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./img/infit.png" alt="" width="50">
            InFit+
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#you">Kamu adalah?</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- home -->
    <div class="container-fluid banner" id="home">
      <div class="container text-start">
        <h4 class="display-4">Selamat Datang di Website Kami</h4>
        <h6>Jagalah Kesehatan Gigimu!</h6>
        <a href="#tentang">
            <br>
          <button type="button" class="btn btn-success btn-lg">
            Tentang Kami
          </button>
        </a>
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
            src="./img/ProfilTubes.png" width="300" height="300" class="col-md-6 float-md-end mb-4 ms-4 crop-img"/> 
           
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

    <!-- you -->
    <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
        <h2 class="display-3" id="you">Kamu Adalah?</h2>
        <div class="row" style="text-align:center;">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <i class="fas fa-address-card fa-3x"></i>
            <h5 class="card-title">Admin</h5>
            <a href="./admin" class="btn btn-primary">Sign-In</a>
        </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <i class="fas fa-users fa-3x"></i>
            <h5 class="card-title">User</h5>
            <a href="./user" class="btn btn-primary">Sign-In</a>
            <a href="./user/tambah_user.php" class="btn btn-primary">Sign-Up</a>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
   
    <!-- Footer -->
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