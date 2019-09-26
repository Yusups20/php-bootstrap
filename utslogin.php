<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        font-family: 'Chilanka',
        cursive;
    </style>
    <title>Raport Siswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="utslogin.php">Yusup Supratman</a>
        <a class="navbar-brand" href="utslogin.php" >Home</a>
        <a class="navbar-brand" href="utslogin.php" >logout</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <center>
        <h2>ASSALAM SHOPPING</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Silahkan Login Terlebih Dahulu</div>
                    <div class="card-body">
                    <div class="container">
        <div class="row justify-content-center">
        <?php
    session_start();
?>

    <pre>
    <form action="" method="post">Email    <input type="email" name="email" required>
                 <br>Password <input type="password" name="pass" required>
                 <br> <input type="submit" value="login" name="akses">
    </form>


<?php
    if (isset($_POST['akses'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a == "yusup@gmail.com" && $b == "123456") {
            $_SESSION['akseslogin'] = 'Admin';
            header("location:utspro.php");
        }else {
            echo "Login Gagal";
        }
    }elseif ($_SESSION['akseslogin']) {
        echo"<script>alert('Anda Sudah Logout');";
    }elseif ($_SESSION['akseslogin']) {
        echo "window.location.href='utslogin.php'</script>";
    }
?>
            </div>
        </div>
    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>