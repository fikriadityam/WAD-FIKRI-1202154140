<?php include 'header.php'; ?>

<style type="text/css">
	#product .title-content {
		text-align: center;#5656f5;
		padding-top: 2.5%;
		padding-bottom: 2.5%;
		color: #5656f5;
	}

	#product .box-content.product-box {
		padding: 0 5%;
	}

	#product .box-content.product-box .product {
		padding: 15px;
	}

	#product .box-content.product-box .product .card {
		padding: 10px;
	}

	#product .box-content.product-box .box-price {
		text-align: center;
		padding: 15px 0;
	}

	#product .box-content.product-box .box-detail-list ul {
		list-style: none;
		padding: 0;
		text-align: center;
	}

	#product .box-content.product-box .box-detail-list ul li:nth-child(1) {
		background-color: #dedede;
		font-weight: 700;
	}

	#product .box-content.product-box .box-detail-list ul li {
		border-bottom: 1px solid #dedede;
		padding: 10px 10px;
	}

	#product .box-content.product-box .button-box {
		text-align: center;
		padding: 20px 0;
		background-color: #eaeaea;
	}

	#product .box-content.product-box .button-box a {
		padding: 10px 15px;
		background-color: #5656f5;
		color: #fff;
		border-radius: 5px;
		text-decoration: none;
	}
</style>

<body>
	<?php include 'navigation.php'; ?>

	<section id="product">
		<div class="container-fluid main-content">
			<div class="row box-content">
				<div class="col-12 col-md-12 title-content">
					<h1>EAD Hotel</h1>
					<label>Welcome To 5 Star Hotel</label>
				</div>
			</div>

			<div class="row box-content product-box">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 product">
					<div class="card">
						<div class="img-box">
							<img src="assets/img/room-1.jpg" class="img-fluid">
						</div>
						<div class="box-price">
							<h4>Standard</h4>
							<span>$90/Day</span>
						</div>
						<div class="box-detail-list">
							<ul>
								<li>Facilities</li>
								<li>1 Single Bed</li>
								<li>1 Bathroom</li>
							</ul>
						</div>
						<div class="button-box">
							<a href="booking.php">Book Now</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-4 col-lg-4 product">
					<div class="card">
						<div class="img-box">
							<img src="assets/img/room-2.jpg" class="img-fluid">
						</div>
						<div class="box-price">
							<h4>Standard</h4>
							<span>$90/Day</span>
						</div>
						<div class="box-detail-list">
							<ul>
								<li>Facilities</li>
								<li>1 Double Bed</li>
								<li>1 Television & Wifi</li>
								<li>2 Bathroom With Hot Water</li>
							</ul>
						</div>
						<div class="button-box">
							<a href="booking.php">Book Now</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-4 col-lg-4 product">
					<div class="card">
						<div class="img-box">
							<img src="assets/img/room-3.jpg" class="img-fluid">
						</div>
						<div class="box-price">
							<h4>Luxury</h4>
							<span>$ 200/Day</span>
						</div>
						<div class="box-detail-list">
							<ul>
								<li>Facilities</li>
								<li>2 Double Bed</li>
								<li>2 Bathroom With Hot Water</li>
								<li>1 Kitchen</li>
								<li>1 Television & Wifi</li>
								<li>1 Work Room</li>
							</ul>
						</div>
						<div class="button-box">
							<a href="booking.php">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>