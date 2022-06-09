<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/stylesheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <title>Chat Dokter</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
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
        <a href="./user_profil_user.php" class="user-icon link-light"> <i class="far fa-user fa-2x"></i> </a>
      </form>
    </nav>

    <!-- chat -->
        <div class="container-fluid kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak</h2>
        <p class="text-center">
          Hubungi Kami jika ada keluhan!
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Nama"
              required
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Username"
              required
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
              require
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5" placeholder="Ketik pesan disini..." required></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <a href="./index.php"><button type="button" class="btn btn-danger btn-lg" onclick="return confirm ('pesan terkirim!');">
            Kirim Pesan
          </button></a>
        </div>
      </div>
    </div>

<footer class="site-footer ">
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