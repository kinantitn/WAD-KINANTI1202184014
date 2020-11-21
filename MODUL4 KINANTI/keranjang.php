<?php
include "database.php";

if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 1) {
    } else {
        header("location:login.php");
    }
} else {
    header("location:login.php");
}

if (!isset($_COOKIE['hapus'])) {
    echo '<style type="text/css">#hapus{
            display: none;
    
        </style>';
} else {
    setcookie("hapus", "");
}

if (isset($_COOKIE['warna'])) {
?>
    <style type="text/css">
        #navbar {
            background-color: <?php echo $_COOKIE['warna']; ?>
        }
        .table {
            margin: 0 auto;
            width: 80%;
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
        .table {
            margin: 20px auto;
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

    <div class="alert alert-warning" role="alert" id="hapus">
        Berhasil dihapus!
    </div>

    <div class="table">
        <table class="table table-striped;">
            <thead>
                <tr style="background-color: #C1C1C1;">
                    <th scope="col">No</th>
                    <th scope="col">Nama barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $nomer = 1;
                $id = $_COOKIE['id'];
                $harga = 0;
                $table = mysqli_query($connect, "SELECT * FROM cart where user_id = $id");
                while ($list = mysqli_fetch_array($table)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $nomer ?></th>
                        <?php $nomer++ ?>
                        <td><?php echo $list['nama_barang'] ?></td>
                        <td><?php echo $list['harga'] ?></td>
                        <?php $harga += $list['harga'] ?>
                        <td><button onclick="location.href = 'hapus.php?id=<?php echo $list['id'] ?>' " type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <th>Total</th>
                    <td></td>
                    <td> <?php echo $harga ?></td>
                    <td></td>
                </tr>
            </tbody>
    </div>

</body>
</html>