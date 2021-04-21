
<?php
    session_start();
    require 'functions.php';
    if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])){
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        $res = mysqli_query(koneksi(), "SELECT * FROM users where username='$username'");
        $user = mysqli_fetch_assoc($res);

        if($hash === hash('sha256', $user['id'], false)){
            $_SESSION['username'] = $user['username'];
            header("Location: admin.php");
            exit;
        }
    }
    if(isset($_SESSION['username'])){
        header("Location: ../admin.php");
        exit;
    }  

    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $isExist = mysqli_query(koneksi(), "SELECT * FROM users where username='$username'");
        var_dump( mysqli_num_rows($isExist));
        if(mysqli_num_rows($isExist) > 0){
            $user = mysqli_fetch_assoc($isExist);
            if(password_verify($password, $user['password'])){
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = $user['id'];
                if($isset($_POST['remember'])){
                    setcookie('username', $user['user'], time() + 60 * 60 * 24);
                    $hash = hash('sha256', $user['id']);
                    setcookie('hash', $hash, time() + 60 * 60 * 24);
                }
        
                if(hash('sha256', $user['id']) == $_SESSION['hash']){
                    header('Location : ../admin.php');
                    die;
                }
                header("Location: ../index.php");
                die;
            }
            if($user['id'] == $_SESSION['hash']){
                header("Location: ../admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }
?>
<html>
    <head>
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if(isset($error)) : ?>
                                <p class="text-danger">Username atau Password salah!</p>
                                <?php endif?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="text-center">
                                    Belum Punya akun? <a href="registrasi.php">Daftar Yuk!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>