<?php

if (!isset($_COOKIE['register'])) {
    echo '<style type="text/css">#register{
            display: none;
    
        </style>';
} else {
    setcookie("register", "");
}

if (!isset($_COOKIE['login'])) {
    echo '<style type="text/css">#loginemail{
            display: none;
    
        </style>';

    echo '<style type="text/css">#loginpassword{
           display: none;
    
       </style>';
} else {
    echo '<style type="text/css">#loginpassword{
           display: none;
    
       </style>';

    echo '<style type="text/css">#loginemail{
            display: none;
    
        </style>';
    setcookie("login", "");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <style>
        a {
            margin-right: 20px;
        }
        body {
            background-color: #e2fafe;
        }
        .kontenlogin {
            background-color: white;
            border-radius: 10px;
            margin: 0 auto;
            margin-top: 50px;
            width: 550px;
        }
        input {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD BEAUTY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
    </nav>

    <div class="alert alert-warning" role="alert" id="register">
        Berhasil registrasi!
    </div>

    <div class="alert alert-danger" role="alert" id="loginemail">
        Email belum terdaftar!
    </div>

    <div class="alert alert-danger" role="alert" id="loginpassword">
        Password salah !
    </div>

    <div class="kontenlogin">
        <form action="logins.php" method="post">
            <h1 style="text-align: center; margin: 40px; padding: 20px; border-bottom: 2px solid lightgrey">Login</h1>
            <div class="kotak" style="margin: 40px; padding: 20px">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" id="email" value="<?php if (isset($_COOKIE['email'])) {
                                                                                    echo $_COOKIE['email'];
                                                                                } ?>" name="email" required>
                </div>

                <div class="form-group">
                    <label for="sandi">Kata Sandi</label>
                    <input type="password" name="sandi" id="sandi" class="form-control" value="<?php if (isset($_COOKIE['password'])) {
                                                                                                    echo $_COOKIE['password'];
                                                                                                } ?>" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember" value="1">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="col text-center btn btn-primary " style="margin: 0 auto">Login</button>
                <p align="center">Belum punya akun? <a href="register.php"> Registrasi</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>