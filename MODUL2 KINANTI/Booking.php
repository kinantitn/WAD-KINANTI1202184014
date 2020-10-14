<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script>
		function setPicture() {
			var banner = document.("idroom");
			var value = banner.options[banner.selectedIndex].value
			$('img').attr("src", value);
		}
	</script>

	<title>Booking</title>
</head>

<body style="background-color: #fafafa">

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
			<div class="row">
				<div class="col-md-5" style="margin: 20px auto;">
					<form action="myBooking.php" method="POST">

						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name">
						</div>

						<div class="form-group md-form md-outline input-with-post-icon datepicker">
							<label for="date">Check-in</label>
							<input placeholder="dd mm yyyy" type="date" class="form-control" name="date">
							</span>
						</div>

						<div class="form-group ">
							<label class="duration" for="inputcheckin">Duration</label>
							<input type="integer" class="form-control" name="duration">
							<small id="durationHelp" class="form-text text-muted">Day(s)</small>
						</div>

						<div class="form-group">
							<label for="room">Room Type</label>
							<?php if (empty($_GET['room'])) : ?>
								<select class="form-control" name="room" id="idroom" onchange="setPicture()">
									<option value="standard.jpg">Standard</option>
									<option value="superior.jpg">Superior</option>
									<option value="luxury.jpg">Luxury</option>
								</select>

							<?php else : ?>
								<input type="text" class="form-control" value=<?= $room ?> name="room" src readonly>
							<?php endif; ?>
						</div>

						<label for="inputService">Add Service(s)</label>
						<small class="form-text text-muted">$ 20/Service</small>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="RoomService" name="service[]">
							<label class="form-check-label">Room Service</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="Breakfast" name="service[]">
							<label class="form-check-label">Breakfast</label>
						</div><br>

						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="text" class="form-control" id="hp" name="phoneNumber">
						</div>

						<button type="submit" class="btn btn-primary btn-lg btn-block">Book</button></a>
					</form>
				</div>


				<div col bg-light text-center style="margin: 20px auto;">
					<img src="standard.jpg" onchange="setPicture()" alt="image-form" style="width:500px;">
				</div>

	</body>

</html>