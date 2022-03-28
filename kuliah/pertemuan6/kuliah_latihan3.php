<?php 
$mahasiswa = [
    [
        "nama" => "Wina Agustina", 
        "npm" => "213040093", 
        "email" => "wina.213040093@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Sharen Kamaya", 
        "npm" => "213040087", 
        "email" => "sharen.213040087@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ]
];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
          <img src="img/au1.jpg" height="50" class="rounded-circle">
      </td>
      <td>Wina Agustina</td>
      <td>213040093</td>
      <td>sharen.213040093@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>
          <img src="img/au2.jpg" height="50" class="rounded-circle">
      </td>
      <td>Sharen Kamaya</td>
      <td>213040087</td>
      <td>wina.213040087@mail.unpas.ac.id</td>
      <td>Teknik Lingkungan</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>
          <img src="img/au3.jpg" height="50" class="rounded-circle">
      </td>
      <td>Mutiara Laelani Firdaus</td>
      <td>213040079</td>
      <td>mutiara.213040079@mail.unpas.ac.id</td>
      <td>Teknik Industri</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>
          <img src="img/au4.jpg" height="50" class="rounded-circle">
      </td>
      <td>Dea Abeliya</td>
      <td>213040070</td>
      <td>wina.213040070@mail.unpas.ac.id</td>
      <td>Teknologi Pangan</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>
          <img src="img/au5.jpg" height="50" class="rounded-circle">
      </td>
      <td>Wini Agustini</td>
      <td>214040083</td>
      <td>wini@gmail.com</td>
      <td>Akuntansi</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>
          <img src="img/au6.jpg" height="50" class="rounded-circle">
      </td>
      <td>Tsaqila Fatma Azzahra</td>
      <td>212050065</td>
      <td>tsaqilafatma@yahoo.id</td>
      <td>Fotografi</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>
          <img src="img/au7.jpg" height="50" class="rounded-circle">
      </td>
      <td>Anisa Levinia Putri</td>
      <td>216030060</td>
      <td>levinia@mail.com</td>
      <td>Hukum</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>
          <img src="img/au8.jpg" height="50" class="rounded-circle">
      </td>
      <td>Alifa Siti Nurshafa</td>
      <td>211506789</td>
      <td>alifanurshafa@gmail.com</td>
      <td>Psikologi</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>
          <img src="img/au9.jpg" height="50" class="rounded-circle">
      </td>
      <td>Tri Suci Widianti</td>
      <td>206040595</td>
      <td>trisuci@mail.unpas.id</td>
      <td>Administrasi Bisnis</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>
          <img src="img/au10.jpg" height="50" class="rounded-circle">
      </td>
      <td>Nadya Astuti</td>
      <td>215098753</td>
      <td>nadya.astuti@yahoo.id</td>
      <td>Pendidikan Guru Sekolah Dasar</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

  </tbody>
</table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>