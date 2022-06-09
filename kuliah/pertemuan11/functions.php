<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_c_213040093') or die ('KONEKSI GAGAL');

    return $conn;
}

function query($query) {
    $conn = koneksi();
 $result = mysqli_query($conn, $query );


 $rows = [];
 While($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
 }

return $rows; 
}

function tambah($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $npm = htmlspecialchars($data['npm']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);


    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$npm', '$email', '$jurusan', '$gambar' )";


    mysqli_query($conn, "$query") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}