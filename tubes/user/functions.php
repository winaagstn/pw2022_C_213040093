<?php

use LDAP\Result;

function koneksi(){
    return mysqli_connect('localhost', 'root', '', 'tubes');    
}

function query($query){
    $conn = koneksi();

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }

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

    $ktp = htmlspecialchars($data['ktp']) ;
    $nama = htmlspecialchars ($data['nama']);
    $gender = htmlspecialchars($data['gender']) ;
    $tempatlahir = htmlspecialchars($data['tempat_lahir']) ;
    $tanggallahir = htmlspecialchars($data['tanggal_lahir']) ;
    $alamat = htmlspecialchars($data['alamat']) ;
    $telepon = htmlspecialchars($data['telepon']) ;
    // $foto = htmlspecialchars($data['foto']) ;

    // upload foto
    $foto = upload();
    if(!$foto){
        return false;
    }

    $query = "INSERT INTO 
                pasien
                VALUES
                (null, '$foto', '$ktp', '$nama', $gender, '$tempatlahir', '$tanggallahir', '$alamat', '$telepon' ) ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();

    // menghapus gambar di folder img
    $p = query("SELECT * FROM pasien WHERE id=$id");
    if($p['foto'] != 'nophoto.jpg'){
        unlink('../img/' . $p['foto']);
    }
    
    mysqli_query($conn, "DELETE FROM pasien WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $ktp = htmlspecialchars($data['ktp']) ;
    $nama = htmlspecialchars ($data['nama']);
    $gender = htmlspecialchars($data['gender']) ;
    $tempatlahir = htmlspecialchars($data['tempat_lahir']) ;
    $tanggallahir = htmlspecialchars($data['tanggal_lahir']) ;
    $alamat = htmlspecialchars($data['alamat']) ;
    $telepon = htmlspecialchars($data['telepon']) ;
    $foto_lama = htmlspecialchars($data['foto_lama']) ;

    $foto = upload();
    if(!$foto){
        return false;
    }

    if($foto == 'nophoto.jpg'){
        $foto = $foto_lama;
    }

    $query = "UPDATE pasien SET
                ktp = '$ktp',  
                nama = '$nama',
                gender = $gender,
                tempat_lahir = '$tempatlahir',
                tanggal_lahir = '$tanggallahir',
                alamat = '$alamat',
                telepon = '$telepon',
                foto = '$foto'
                WHERE id = $id";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM pasien
                WHERE 
                nama LIKE '%$keyword%' OR 
                ktp LIKE '%$keyword%' OR
                telepon LIKE '%$keyword%' OR 
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
    if($user = query("SELECT * FROM user WHERE username = '$username'")){
        // cek password
        if(password_verify($password, $user['password'])){
           // set session
           $_SESSION['login'] = true;

        header("Location: ./index.php");
        exit;  
        
        }        
    } 
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
    
}

function registrasi($data){
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if(empty($username) || empty($password1) || empty($password2)){
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = './registrasi.php';        
                </script>";
        return false;           
    }

    // jika username sudah ada
    if(query("SELECT * FROM user WHERE username = '$username'")){
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = './registrasi.php';        
                </script>";
        return false; 
    }

    // jika konfirmasi password tidak sesuai
    if($password1 !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                document.location.href = './registrasi.php';        
                </script>";
        return false; 
    }

    // jika password <5 digit
    if(strlen($password1) < 5){
        echo "<script>
                alert('password terlalu pendek!');
                document.location.href = './registrasi.php';        
                </script>";
        return false; 
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
?> 
