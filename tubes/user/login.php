<?php 
session_start();

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}

require './functions.php';

// ketika tombol login diklik
if(isset($_POST['login'])){
    $login = login($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootsrtrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <?php if(isset($login['error'])) : ?>
        <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
        <form action="" method="post">
            <ul>
                <div class="mb-3">
                    <label>
                        Username :
                        <input type="text" name="username" autofocus autocomplete="off" required>
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Password :
                        <input type="password" name="password" required>
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" name="login" class="btn btn-outline-success">Login</button>
                </div>
            </ul>
        </form>
    
</body>
</html>