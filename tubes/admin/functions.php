<?php

use LDAP\Result;

function koneksi(){
    return mysqli_connect('localhost', 'root', '', 'tubes');
}

function query($query){
    $conn = koneksi();

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    // if(mysqli_num_rows($result) == 1){
    //     return mysqli_fetch_assoc($result);
    // }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}

function upload(){
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if($error == 4){
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!')
        //         </script>";
        return 'nophoto.jpg';
    }

    // ketika user tidak mengupload gambar
    // cek ekstensi file
    $daftar_foto=['jpg', 'jpeg', 'png'];
    $ekstensi_file=explode('.', $nama_file);
    $ekstensi_file=strtolower(end($ekstensi_file));
    if(!in_array($ekstensi_file, $daftar_foto)){
        echo "<script>
                alert('yang anda pilih bukan gambar!')
                </script>";
        return false;
    }

    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png'){
        echo "<script>
                alert('pilih gambar terlebih dahulu!')
                </script>";
        return false;
    }

    // cek ukuran gambar
    // maksimal 5Mb === 5000000
    if($ukuran_file > 5000000){
        echo "<script>
                alert('ukuran gambar terlalu besar!')
                </script>";
        return false;
    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);
    
    return $nama_file_baru;
}

function tambah($data){
    $conn = koneksi();

    $nama_dokter = htmlspecialchars($data['nama_dokter']);
    $gender = htmlspecialchars($data['gender']) ;
    $lulusan = htmlspecialchars($data['lulusan']) ;
    $no_tlp = htmlspecialchars($data['no_tlp']) ;
    $kerja = htmlspecialchars($data['kerja']) ;

    // $foto = htmlspecialchars($data['foto']) ;

    // upload foto
    $foto = upload();
    if(!$foto){
        return false;
    }

    $query = "INSERT INTO 
                dokter
                VALUES
                (null, '$nama_dokter', $gender, '$no_tlp', '$lulusan',  '$kerja', '$foto' ) ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
    
}

function hapus($id){
    $conn = koneksi();

    // menghapus gambar di folder img
    $dokter = query("SELECT * FROM dokter WHERE id=$id");
    if($dokter['foto'] != 'nophoto.jpg'){
        unlink('../img/' . $dokter['foto']);
    }
    
    mysqli_query($conn, "DELETE FROM dokter WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama_dokter = htmlspecialchars ($data['nama_dokter']);
    $gender =$data['gender'] ;
    $no_tlp = htmlspecialchars($data['no_tlp']) ;
    $lulusan = htmlspecialchars($data['lulusan']) ;
    $kerja = htmlspecialchars($data['kerja']) ;
    $foto_lama = htmlspecialchars($data['foto_lama']) ;

    $foto = upload();
    if(!$foto){
        return false;
    }

    if($foto == 'nophoto.jpg'){
        $foto = $foto_lama;
    }

    $query = "UPDATE dokter SET 
    nama_dokter = '$nama_dokter', gender = $gender, 
    no_tlp = '$no_tlp',lulusan = '$lulusan',kerja = '$kerja',foto = '$foto' WHERE id = $id";
    
    mysqli_query($conn, $query)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
    
}

function cari($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM dokter
                WHERE 
                nama_dokter LIKE '%$keyword%' OR 
                no_tlp LIKE '%$keyword%' 
                ";

    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}
function cari_pasien($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM pasien
                WHERE 
                nama LIKE '%$keyword%' OR 
                ktp LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%'
                ";

    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}
function login($data){
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username
    if($username == 'admin' && $password == '12345'){
        // set session
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;   
    } else{
        return [
            'error' => true,
            'pesan' => 'Username / Password Salah!'
        ];
    }
    
}
