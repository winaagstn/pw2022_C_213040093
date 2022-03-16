<!-- Belajar di Kelas
<?php
// ARRAY Multidimensi
// Array di dalam array

$mahasiswa = [
    ["Wina Agustina", "213040093", "wina.213040093@mail.unpas.ac.id", "Teknik Informatika"], 
    ["Sharen Kamaya", "213040087", [1,[2],3], "sharen.213040087@mail.unpas.ac.id", "Teknik Informatika"]
];
echo $mahasiswa[1][2][1][0]; // 2

?> -->

<?php
// Pengulangan pada array
// for / foreach
$angka = [3, 2, 15, 20, 11, 17, 89, 8, 1, 45];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both}
    </style>
</head>
<body>
<!-- cara pengulangan manual mengikuti kode loopingnya
<?php for( $i=0; $i<7; $i++ ) {?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>
-->

<!-- cara pengulangan otomatis sesuai jumlah elemen -->
<?php for( $i=0; $i < count($angka); $i++ ) {?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

</body>
</html>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?> </div>
<?php } ?>

<div class="clear"></div>


<!-- gaya penulisan templating -->
<?php foreach($angka as $a) :?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach;?>