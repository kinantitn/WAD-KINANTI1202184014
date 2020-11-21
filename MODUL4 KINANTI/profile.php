<?php
include "database.php";

$id = $_COOKIE['id'];
$data = mysqli_query($connect, "SELECT * FROM `user` where id = '$id'");
$ini = mysqli_fetch_array($data);

if (!isset($_COOKIE['update'])) {
    echo '<style type="text/css">#update{
            display: none;
    
        </style>';
} else {
    setcookie("update", "");
}

if (isset($_COOKIE['warna'])) {
?>
    <style type="text/css">
        #navbar {
            background-color: <?php echo $_COOKIE['warna']; ?>
        }
    </style>
<?php
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <style>
        .card-group p {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="home.php" id>WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="keranjang.php" style="color: black"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg> <span class="sr-only">(current)</span>
                    <div class="nav-item dropdown">
                </a>

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selamat datang, <?php echo $_COOKIE['nama'] ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
        </div>
    </nav>

    <div class="alert alert-warning" role="alert" id="update">
        Berhasil di update!
    </div>

    <div class="kontenregister">
        <form action="update.php" method="post" onsubmit="return konfirmasi()">
            <h1 style="text-align: center;margin: 40px; padding: 20px; border-bottom: 2px solid lightgrey">Register</h1>
            <div class="kotak" style="margin: 40px;padding: 20px">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input class="form-control" type="text" value="<?php echo $ini['nama'] ?>" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" value="<?php echo $ini['email'] ?>" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="handphone">No Handphone</label>
                    <input class="form-control" type="number" value="<?php echo $ini['no_hp'] ?>" id="handphone" name="handphone" required>
                </div>

                <div class="form-group">
                    <label for="sandi">Kata Sandi</label>
                    <input type="password" name="sandi" id="sandi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="konsandi">Konfirmasi Kata Sandi</label>
                    <input type="password" name="konsandi" id="konsandi" class="form-control" required>
                </div>

                <div class="form-group ">
                    <label for="inputGroupSelect01">Warna Navbar</label>

                    <select class="custom-select" id="inputGroupSelect01" name="warna">
                        <option <?php if (isset($_COOKIE['warna'])) {
                                    if ($_COOKIE['warna'] == "normal") {
                                        echo "selected";
                                    }
                                } ?> value="normal">Light</option>
                        <option <?php if (isset($_COOKIE['warna'])) {
                                    if ($_COOKIE['warna'] == "#616161") {
                                        echo "selected";
                                    }
                                } ?> value="blue">Dark</option>
                    </select>
                </div>
                <button type="submit" class="col text-center btn btn-primary " style="margin: 0 auto">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function konfirmasi() {
            var password = document.getElementById("sandi").value;
            var konfirpassword = document.getElementById("konsandi").value;
            if (password != konfirpassword) {
                alert("password tidak sama");
                return false;
            }
            if (password != <?php echo $ini['password'] ?>) {
                alert("password salah");
                return false;
            }
        }
    </script>

</body>
</html>