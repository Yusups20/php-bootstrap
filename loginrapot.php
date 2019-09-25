<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <pre>
    <form action="" method="post">
    Email <input type="email" name="email" required>
    <br>Password<input type="password" name="pass" required>
    <br> <input type="submit" value="login" name="akses">
    </form>
</body>
</html>
<?php
    if (isset($_POST['akses'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a == "yusup@gmail.com" && $b == "123456") {
            $_SESSION['akseslogin'] = 'Admin';
            header("location:tugasrapot.php");
        }else {
            echo "Login Gagal";
        }
    }elseif ($_SESSION['akseslogin']) {
        echo"<script>alert('Anda Sudah Login');"
        ."window.location.href='tugasrapot.php'</script>";
    }
?>
<?php
    session_start();
    if (isset($_SESSION['akseslogin'])) {
        unset($_SESSION);
        session_destroy();
        header('location:tugasrapot.php');
    }
?>