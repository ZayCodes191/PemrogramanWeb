<?php
    require 'functions.php';

    if (isset($_POST['register'])){
        if(register($_POST) > 0){
            echo "<script>
                alert('register berhasil')
                document.location.href='login.php'
            </script>";
        }else{
            echo "<script>
                alert('register gagal')
            </script>";
        }
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
                            <h3>Register</h3>
                            <hr/>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="register" class="btn btn-primary">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>