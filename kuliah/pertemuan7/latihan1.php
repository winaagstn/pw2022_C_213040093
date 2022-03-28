<?php 
$mahasiswa = [
    [
        "nama" => "Wina Agustina",
        "npm" => "213040093",
        "email" => "wina.213040093@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "au1.jpg"
        
    ],
    [
        "nama" => "Dea Abeliya",
        "npm" => "213040070",
        "email" => "dea.213040070@mail.unpas.ac.id",
        "jurusan" => "Teknik Mesin",
        "gambar" => "au2.jpg"
    ],
    [
        "nama" => " Mutiara Laelani Firdaus",
        "npm" => "213040079",
        "email" => "mutiara.213040079@mail.unpas.ac.id",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "au3.jpg"
        
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs):?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"];?>&npm=<?=$mhs["npm"];?>&email=<?=$mhs["email"];?>&jurusan=<?=$mhs["jurusan"];?>&gambar=<?=$mhs["gambar"];?>"><?= $mhs["nama"];?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>