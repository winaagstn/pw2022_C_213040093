<?php 
// Koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_c_213040093') or die('KONEKSI GAGAL') ;

// Query ke tabel Mahsaiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Siapkan data $mahasiwa
$rows =[];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$mahasiswa = $rows;
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
    <?php $i=1;
    foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
          <img src="img/<?= $mhs['gambar']; ?>" height="50" class="rounded-circle">
      </td>
      <td><?= $mhs['nama']; ?></td>
      <td><?= $mhs['npm']; ?></td>
      <td><?= $mhs['email']; ?></td>
      <td><?= $mhs['jurusan']; ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <?php endforeach; ?>

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