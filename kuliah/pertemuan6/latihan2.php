<?php 
// $mahasiswa = [
//     ["Wina Agustina", "213040093", "wina.213040093@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Sharen Kamaya", "213040087", "sharen.213040087@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Wina Agustina",
    "nrp" => "213040093",
    "email" => "wina.213040093@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "profil1.jpg"
    ],
    [
    "nama" => "Sharen Kamaya",
    "nrp" => "213040087",
    "email" => "sharen.213040087@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "profil2.jpg"
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>