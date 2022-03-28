<?php 
// Array Associative
// Array yang index-nya string

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

// var_dump($mahasiswa);


?>

<?php foreach($mahasiswa as $mhs){ ?>
<ul>
    <li> Nama : <?php echo $mhs["nama"];?></li>
    <li> NPM : <?php echo $mhs["npm"];?> </li>
    <li> Email : <?php echo $mhs["email"];?></li>
    <li> Jurusan : <?php echo $mhs["jurusan"];?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <?php foreach($mhs as $key => $value) {?>
        <li><?php echo $key; ?>:<?php echo $value; ?> </li>
    <?php } ?>
</ul>
<?php } ?>