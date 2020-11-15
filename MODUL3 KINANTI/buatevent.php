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

  <div class="container mt-3">
    <h4 class="text-primary">Buat Event</h4>
    <form action="create.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col px-1">
          <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>

            <div class="card-body">
              <div class="form-group">
                <label for="name" style="font-weight: bold;">Nama</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>

              <div class="form-group">
                <label for="name" style="font-weight: bold;">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
              </div>

              <label style="font-weight: bold;">Upload Gambar</label>
              <div class="custom-file mb-3">
                <input name="gambar" type="file" class="custom-file-input" id="gambar">
                <label class="custom-file-label" for="gambar">Choose File</label>
              </div>

              <label for="kategori" style="font-weight: bold;">Kategori</label>
              <div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="kategori" id="online" value="online">
                  <label for="online" class="form-check-label">Online</label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="kategori" id="offline" value="offline">
                  <label for="offline" class="form-check-label">Offline</label>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col px-1">
          <div class="card">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-primary"></div>
            <div class="card-body">

              <div class="form-group">
                <label for="name" style="font-weight: bold;">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal">
              </div>

              <div class="d-flex">

                <div class="w-100 pr-1">
                  <label for="mulai" style="font-weight: bold;">Jam Mulai</label>
                  <select name="mulai" class="form-control" id="mulai">
                    <?php
                    $time = array(
                      "00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00",
                      "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"
                    );
                    foreach ($time as $times) {
                      echo "<option value='$times'>$times</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="w-100 pl-1">
                  <label for="berakhir" style="font-weight: bold;">Jam Berakhir</label>
                  <select name="berakhir" id="berakhir" class="form-control">
                    <?php
                    foreach ($time as $times) {
                      echo "<option value='$times'>$times</option>";
                    }
                    ?>
                  </select>
                </div>

              </div>
              <div class="form-group my-1">
                <label for="name" style="font-weight: bold;">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat">
              </div>

              <div class="form-group my-1">
                <label for="name" style="font-weight: bold;">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
              </div>

              <label for="benefit" style="font-weight: bold;">Benefit</label>

              <div class="control">
                <input type="checkbox" name="benefit[]" id="Snacks" value="snacks">
                <label for="snacks">Snacks</label>

                <input type="checkbox" name="benefit[]" id="Souvenir" value="souvenir">
                <label for="souvenir">Souvenir</label>

                <input type="checkbox" name="benefit[]" id="Sertifikat" value="sertifikat">
                <label for="sertifikat">Sertifikat</label>
              </div>

              <div class="form-group d-flex justify-content-end my-1">
                <button type="submit" class="btn btn-primary mx-3">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>

            </div>
          </div>

        </div>
      </div>
    </form>

  </div>

</body>

</html>