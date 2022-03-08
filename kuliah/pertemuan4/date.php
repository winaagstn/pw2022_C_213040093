<?php
// lihat berbagai format di php.net
// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970; waktu yang disepakati oleh para ahli unntuk komputer
// echo time();
// echo date ("d M Y", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,8,2,2003);
// echo date("l", mktime(0,0,0,8,2,2003));

// strtotime
echo date("l", strtotime("25 aug 1985"));
?>