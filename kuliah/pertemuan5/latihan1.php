<!-- Belajar di Kelas
<?php
// Pertemuan 5 - ARRAY
// Array adalah variabel yang bisa menampung/menyimpan banyak nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu"]; //cara baru
$bulan = array ("Januari", "Februari", "Maret"); //cara lama
$myArr = [10, "Wina", true]; //myArr bisa menyimpan data yang berbeda

// Mencerak ARRAY
// mencetak 1 elemen di dalam array, menggunakan index
// index dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr[0];
echo "<hr>";

// mencetak menggunakan var_dump atau print_r()
// khusus debbuging
var_dump ($hari);
echo "<br>";

print_r($bulan);
echo "<hr>";

// Mencetak semua isi Array menggunakan looping
// for, jarang dipakai
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach, looping khusus array
foreach($bulan as $b){
    echo $b;
    echo "<br>";
}
echo "<hr>";

// -> arrow
// => fat arrow

foreach ($bulan as $key => $value) {
    echo "Key: $key - Value: $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);

?> 
-->

<!-- Vid Yt -->
<?php
// array
// variabel yang memiliki banyak nilai
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array
// cara lama
// nilai yang ada di dalam array disebut dengan ELEMEN
// elemen string gunakan "", integer tidak perlu ""
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
// elemen pada array boleh memiliki tipe data berbeda
$arr1 = [123, "tlisan", false];

// Menampilkan Array
// vardump() / print_r()
// tiap elemen dalam array memiliki INDEX yang dimulai dari 0
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
// dalam [] diisi index yang ingin ditampilkan
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];
// echo "<br>";

// Menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);



?>