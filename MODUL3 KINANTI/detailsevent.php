<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="desain.css">

</head>

<?php
include("connect.php");
$id = $_GET["id"];
$query = "SELECT * FROM modul3_crud WHERE id = $id";
$select = mysqli_query($conn, $query);
$event = $select->fetch_assoc();
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
        <a class="navbar-brand">EAD EVENTS</a>
        <ul class="navbar-nav">
            <li><a class="btn btn-primary" href="home.php">Home</a></li>
            <li class="ml-2"><a class="btn btn-outline-light " href="buatevent.php">Buat Event</a></li>
        </ul>
    </nav>

    <div style="max-width: 760px" class="container" py-4>
        <div class="card">
            <img src="gambar/<?= $event['gambar'] ?>" class="card-image-top" style="max-height: 500px;">
            <div class="card-body">
                <h4><?= $event["name"] ?></h4>
                <p class="font-weight-bold">Deskripsi</p>
                <p><?= $event["deskripsi"] ?></p>

                <div class="row">
                    <div class="col col-6">
                        <p class="font-weight-bold">Informasi Event</p>
                        <p><?= $event["tanggal"] ?></p>
                        <p><?= $event["tempat"] ?></p>
                        <p><?= $event["mulai"] ?> - <?= $event["berakhir"] ?></p>
                        <p><strong>Kategori: </strong><?= $event["kategori"] ?></p>
                        <p class="font-weight-bold"><?= $event["harga"] ?></p>
                    </div>
                    <div class="col col-6">
                        <p class="font-weight-bold">Benefit</p>
                        <ul>
                            <li><?= $event["benefit"] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editmodal">Edit</button>
                    <a href="delete.php?id=<?= $event["id"] ?>">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="editmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">

            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Content Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="id" value="<?= $event['id'] ?>" hidden>
                        <div class="row">

                            <div class="col col-6">
                                <div class="card h-100">
                                    <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Nama</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?= $event["name"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?= ($event["deskripsi"]) ?></textarea>
                                        </div>

                                        <label style="font-weight: bold;">Upload Gambar</label>
                                        <div class="custom-file mb-3">
                                            <input name="gambar" type="file" class="custom-file-input" id="gambar">
                                            <label class="custom-file-label" for="gambar">Upload</label>
                                        </div>

                                        <label for="kategori" style="font-weight: bold;">Kategori</label>
                                        <div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="kategori" class="form-check-input" id="online" value="online" <?= $event["kategori"] == "online" ? "checked" : "" ?>>
                                                <label for="online" class="form-check-label">Online</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="kategori" class="form-check-input" id="offline" value="offline" <?= $event["kategori"] == "offline" ? "checked" : "" ?>>
                                                <label for="offline" class="form-check-label">Offline</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col col-6">
                                <div class="card h-100">
                                    <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-primary"></div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $event["tanggal"] ?>">
                                        </div>

                                        <div class="d-flex">

                                            <div class="w-100 pr-1">
                                                <label for="mulai" style="font-weight: bold;">Jam Mulai</label>
                                                <select name="mulai" id="mulai" class="form-control" value="<?= substr($event["mulai"], 0, 5) ?>">
                                                    <?php
                                                    $time = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00");
                                                    foreach ($time as $times) {
                                                        $selected = substr($event["mulai"], 0, 5) == $times ? "selected" : "";
                                                        echo "<option value='$times' $selected>$times</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="w-100 pl-1">
                                                <label for="berakhir" style="font-weight: bold;">Jam Berakhir</label>
                                                <select name="berakhir" id="berakhir" class="form-control" value="<?= substr($event["berakhir"], 0, 5) ?>">
                                                    <?php
                                                    foreach ($time as $times) {
                                                        $selected = substr($event["berakhir"], 0, 5) == $times ? "selected" : "";
                                                        echo "<option value='$times' $selected>$times</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Tempat</label>
                                            <input type="text" class="form-control" name="tempat" id="tempat" value="<?= $event["tempat"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga" value="<?= $event["harga"] ?>">
                                        </div>

                                        <label for="benefit" style="font-weight: bold;">Benefit</label>
                                        <div class="control">
                                            <?php
                                            $benefits = explode(",", $event["benefit"]);
                                            $benefit_list = array("snacks", "souvenir", "sertifikat");

                                            foreach ($benefit_list as $benefit) {
                                            ?>

                                                <input type="checkbox" name="benefit[]" id="<?= $benefit ?>" value="<?= $benefit ?>" <?= in_array($benefit, $benefits) ? "checked" : "" ?>>
                                                <label for="<?= $benefit ?>"><?= $benefit ?></label>

                                            <?php } ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>