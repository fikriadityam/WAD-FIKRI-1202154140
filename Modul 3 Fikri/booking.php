<?php include 'header.php'; ?>

<style type="text/css">
	#product .title-content {
		text-align: center;#5656f5;
		padding-top: 2.5%;
		padding-bottom: 2.5%;
		color: #5656f5;
	}

	#product .box-content.content-box {
		padding: 5% 5%;
	}

	#product .wrapper-radio {
		padding: 0 5%;
	}
</style>

<body>
	<?php include 'navigation.php'; ?>

	<section id="product">
		<div class="container-fluid main-content">
			<!-- <div class="row box-content"> -->
				<!-- <div class="col-12 col-md-12 title-content">
					<h1>EAD Hotel</h1>
					<label>Welcome To 5 Star Hotel</label>
				</div> -->
			<!-- </div> -->

			<div class="row box-content content-box">
				<div class="col-12 col-md-6 content-wrapper">
					<form action="booking-list.php" method="post" class="row wrapper-box">
						<div class="col-12 col-md-12 form-group">
							<label for="name">Name</label>
							<input type="text" name="name" placeholder="Input Your Name" class="form-control">
						</div>
						
						<div class="col-12 col-md-12 form-group">
							<label for="checkin">Check In</label>
							<input type="date" name="checkin" placeholder="Input Your Checkin" class="form-control">
						</div>

						<div class="col-12 col-md-12 form-group">
							<label for="checkout">Check Out</label>
							<input type="date" name="checkout" placeholder="Input Your Checkout" class="form-control">
						</div>

						<div class="col-12 col-md-12 form-group">
							<label for="duration">Duration</label>
							<input type="text" name="duration" placeholder="Input Your Duration" class="form-control">
							<p>Day(s)</p>
						</div>

						<div class="col-12 col-md-12 form-group">
							<label for="roomtype">Room Type</label>
							<select name="roomtype" class="form-control">
								<option value="standart">Standart</option>
								<option value="vip">VIP</option>
							</select>
						</div>

						<div class="col-12 col-md-12 form-group">
							<label for="duration">Add Service(s)</label>
							<span>$ 20/Service</span>
							<div class="wrapper-radio">
								<input class="form-check-input" type="checkbox" name="services[]" id="roomservice" value="roomservice">
								<label class="form-check-label" for="roomservice">Room Service</label>
							</div>
							<div class="wrapper-radio">
								<input class="form-check-input" type="checkbox" name="services[]" id="breakfast" value="breakfast">
								<label class="form-check-label" for="breakfast">Breakfast</label>
							</div>
						</div>

						<div class="col-12 col-md-12 form-group">
							<label for="phonenumber">Phone Number</label>
							<input type="text" name="phonenumber" placeholder="Input Your Phone Number" class="form-control">
						</div>

						<div class="col-12 col-md-12 form-group">
							<button type="submit" class="btn btn-primary book-button" style="width: 100%;">Book</button>
						</div>
					</form>
				</div>
				<div class="col-12 col-md-6 img-wrapper">
					<img src="assets/img/room-1.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
</body>