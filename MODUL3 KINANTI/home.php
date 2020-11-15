<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="desain.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
    <a class="navbar-brand">EAD EVENTS</a>
    <ul class="navbar-nav">
      <li><a class="btn btn-primary" href="home.php">Home</a></li>
      <li class="ml-2"><a class="btn btn-outline-light " href="buatevent.php">Buat Event</a></li>
    </ul>
  </nav>

  <div class="container"> <br>
    <h3 class="text-primary text-center mb-5">WELCOME TO EAD EVENTS!</h3>
    <div class="row">

      <?php
      include('connect.php');
      $query = "SELECT * FROM modul3_crud";

      $selects = mysqli_query($conn, $query);
      $empty = true;
      while ($select = mysqli_fetch_assoc($selects)) {
        $empty = false;
      ?>

        <div class="col col-4">
          <div class="card">
            <img src="gambar/<?= $select['gambar'] ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-tittle"><?= $select['name'] ?></h5>
              <p><?= $select['tanggal'] ?></p>
              <p><?= $select['tempat'] ?></p>
              <p>Kategori: <?= $select['kategori'] ?></p>
            </div>
            <div class="card-footer text-right">
              <a href="./detailsevent.php?id=<?= $select['id'] ?>">
                <button class="btn btn-primary">Detail</button></a>
            </div>
          </div>
        </div>

      <?php }
      if ($empty) {
        echo "No Event Found";
      }

      ?>

    </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>