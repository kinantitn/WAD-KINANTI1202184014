<?php
$bookNumber = rand(00000, 99999);
$name = $_POST['name'];
$date = $_POST['date'];
$duration = $_POST['duration'];
$out = $date . "+" . $duration . "Days";
$phoneNumber = $_POST['phoneNumber'];
$total = 0;

$room = $_POST['room'];
if ($_POST['room'] == 'standard.jpg') {
    $total += (90 * $_POST['duration']);
} elseif ($_POST['room'] != 'superior.jpg') {
    $total += (150 * $_POST['duration']);
} elseif ($_POST['room'] == 'luxury.jpg') {
    $total += (200 * $_POST['duration']);
} else {
    echo '0';
}

$service = $_POST['service'];
if (in_array('RoomService', $service)) {
    $total += (20 + $_POST['duration']);
}
if (in_array('Breakfast', $service)) {
    $total += (20 * $_POST['duration']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>myBooking</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link" href="Home.php">Home</a>
                <a class="nav-link active" href="Booking.php">Booking</a>
            </div>
        </div>
    </nav>

    <br><br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Room Type</th>
                    <th>Phone number</th>
                    <th>Service</th>
                    <th>Total Price</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><b><?= $bookNumber ?></b></td>
                    <td><?= $name ?></td>
                    <td><?= date('d-m-Y', strtotime($date)) ?></td>
                    <td><?= date('d-m-Y', strtotime($out)) ?></td>
                    <td><?= $room ?></td>
                    <td><?= $phoneNumber ?></td>
                    <td>
                        <?php
                        if (empty($_POST['service'])) {
                            echo $service;
                        } else {
                            foreach ($service as $key => $value) {
                                echo '<ul>';
                                echo '<li>' . $value . '</li>';
                                echo '</ul>';
                            }
                        }
                        ?>
                    </td>
                    <td><?= $total ?></td>
                </tr>
            </tbody>
    </div>

</body>

</html>