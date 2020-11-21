<?php

if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 1) {
    } else {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}

if (!isset($_COOKIE['beli'])) {
    echo '<style type="text/css">#keranjang{
            display: none;
    
        </style>';
} else {
    setcookie("beli", "");
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
        <a class="navbar-brand" href="#" id>WAD Beauty</a>
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

    <div class="alert alert-warning" role="alert" id="keranjang">
        Berhasil Ditambahkan
    </div>

    <div class="containeritem" style="width: 950px;margin: 0 auto;margin-top: 20px">
        <div style="background-image: linear-gradient(-225deg, #69C4FF 0%, #5AF9D4 100%); text-align: center ; padding: 50px">
            <h1>WAD Beauty</h1>
            <p>Tersedia Skin Care berharga murah tapi bukan murahan dan berkualitas</p>
        </div>

        <div class="card-group">
            <div class="card">
                <img src="img/cardamom.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cardamom & Cotton Flower Hand & Body Wash</h5>
                    <p class="card-text">Hand and body wash dengan aroma elegan dari ekstrak bunga kapas dan minyak esensial cardamom. Menciptakan busa lembut dan creamy, serta sensasi kulit yang lembut. Memberikan sentuhan segar pada kulit! Teruji dermatologis, formula tanpa sabun, pH seimbang.</p>
                    <small class="text-muted">Rp 300.000</small>
                </div>
                <div class="card-footer">

                    <button type="button" onclick="cardamom()" class="btn btn-primary" style="width: 100%">Tambahkan ke Keranjang</button>
                </div>
            </div>

            <div class="card">
                <img src="img/behappy.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Be Happy Shower Gel Feel Good</h5>
                    <p class="card-text">Shower gel dengan aroma jeruk merah dan kunyit yang membersihkan dan menyegarkan. Mengandung minyak esensial. 200ml berdasarkan kandungan bahan.</p>
                    <small class="text-muted">Rp 600.000</small>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="behappy()" class="btn btn-primary" style="width: 100%">Tambahkan ke Keranjang</button>
                </div>
            </div>

            <div class="card">
                <img src="img/ExternalImage.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Silk Beauty White Glow Body Wash</h5>
                    <p class="card-text">Silk Proteins dari Silk Beauty White Glow Body Wash membelai kulit dengan lembut, sementara ekstrak white mulberry melembapkan dan mencerahkan secara alami dengan bahan-bahan antioksidan protektifnya. Cherry blossom yang menggoda menambah aroma sensual dan membantu memancarkan cahaya alami kulit.</p>
                    <small class="text-muted">Rp 800.000</small>
                </div>
                <div class="card-footer">

                    <button type="button" onclick="silk()" class="btn btn-primary" style="width: 100%">Tambahkan ke Keranjang</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        function cardamom() {
            location.href = "beli.php?item=1";
        }
        function silk() {
            location.href = "beli.php?item=2";
        }
        function behappy() {
            location.href = "beli.php?item=3";
        }
    </script>
    
</body>
</html>