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
        .kontenregister {
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

    <script>
        function konfirmasi() {
            var password = document.getElementById("sandi").value;
            var konfirpassword = document.getElementById("konsandi").value;
            if (password != konfirpassword) {
                alert("password tidak sama");
                return false;
            }

        }
    </script>

    <div class="kontenregister">
        <form action="registers.php" method="post" onsubmit="return konfirmasi()">
            <h1 style="text-align: center;margin: 40px;padding: 20px; border-bottom: 2px solid lightgrey">Register</h1>
            <div class="kotak" style="margin: 40px;padding: 20px">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Masukkan Alamat E-mail" required>
                </div>

                <div class="form-group">
                    <label for="handphone">No. Handphone</label>
                    <input class="form-control" type="number" id="handphone" name="handphone" placeholder="Masukkan Nomor Handphone" required>
                </div>

                <div class="form-group">
                    <label for="sandi">Kata Sandi</label>
                    <input type="password" name="sandi" id="sandi" class="form-control" placeholder="Buat Kata Sandi" required>
                </div>

                <div class="form-group">
                    <label for="konsandi">Konfirmasi Kata Sandi</label>
                    <input type="password" name="konsandi" id="konsandi" class="form-control" placeholder="Konfirmasi Kata Sandi" required>
                </div>

                <button type="submit" class="col text-center btn btn-primary " style="margin: 0 auto">Daftar</button>
                <p align="center">Sudah punya akun? <a href="login.php"> Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>