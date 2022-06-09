<?php 

require './functions.php';

if(isset($_POST['registrasi'])){
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan. silahkan masuk!');
                document.location.href = './index.php';        
                </script>";
    } else{
        echo 'user gagal ditambahkan!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registrasi Akun</title>
</head>
<body>
    <h3>Registrasi Akun</h3>
    <form action="" method="post">
        <ul>
            <div class="mb-3">
                <label for="username" class="form-label">
                    Username :
                    <input type="text" class="form-control" name="username" autocomplete="off" required >
                </label>     
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    Password :
                    <input type="password" class="form-control" name="password1" required >
                </label>     
            </div>
            <div class="mb-3">
                <label for="konfirm_password" class="form-label">
                    Konfirmasi Password :
                    <input type="password" class="form-control" name="password2" required >
                </label>     
            </div>
            <div class="mb-3">
                <a href="index.php">
                <button type="submit" name="registrasi" class="btn btn-outline-success">Registrasi</button>
                </a>
            </div>
        </ul>
    </form>
</body>
</html>