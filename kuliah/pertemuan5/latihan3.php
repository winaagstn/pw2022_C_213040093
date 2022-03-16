<?php
$mahasiswa =[["Wina Agustina", "213040093", "Teknik Informatika", "wina.213040093@mail.unpas.ac.id"],
["Sharen Kamaya", "213040087", "Teknik Informatika", "sharen.213040087@mail.unpas.ac.id"]]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <!-- Jika menggunakan teknik ini maka urutan elemennya harus sesuai -->
    <ul>
        <li> Nama : <?= $mhs[0];?> </li>
        <li> NRP : <?= $mhs[1];?> </li>
        <li> Jurusan : <?= $mhs[2];?> </li>
        <li> Email : <?= $mhs[3];?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>