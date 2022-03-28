<?php
// Array Numerik
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Wina Agustina", "213040093", "wina.213040093@mail.unpas.ac.id", "Teknik Informatika"],
    ["Sharen Kamaya", "213040087", "sharen.213040087@mail.unpas.ac.id", "Teknik Informatika"]
];

// var_dump($mahasiswa[0][2]);

?>

<?php foreach($mahasiswa as $mhs){ ?>
<ul>
    <li> Nama : <?php echo $mhs[0];?></li>
    <li> NPM : <?php echo $mhs[1];?> </li>
    <li> Email : <?php echo $mhs[2];?></li>
    <li> Jurusan : <?php echo $mhs[3];?></li>
</ul>
<?php } ?>

