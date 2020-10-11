<?php include 'navigation.php'; ?>

<style type="text/css">
	table {
		max-width: 100%;
		width: 100%;
		margin: 15px 0;
		padding: 10px;
	}

	table td {
		padding: 10px;
	}

	table td ul {
		padding: 0 25px;
	}
</style>

<?php
	
	$bookingnumber = rand(10, 100) . "" . rand(1 , 100);
	$name = $_POST['name'];
	$checkin = $_POST['checkin'];
	$duration = $_POST['duration'];
	$roomtype = $_POST['roomtype'];
	$phonenumber = $_POST['phonenumber'];
	$services = "";

	$date_fix = date_create(date($checkin));
	date_add($date_fix, date_interval_create_from_date_string( $duration . "days"));
	$checkout = date_format($date_fix,"Y-m-d");

	if (isset($_POST['services']) != Null) {
		$services = $_POST['services'];
	} else {
		$services = "No Service";
	}
	
	$price = 100;
	$price_roomservice = 50;
	$price_breakfast = 75;

	if (isset($_POST['services']) != Null) {
		if ( count($services) > 1) {
			$totalprice = "$" . ($price + $price_breakfast + $price_roomservice);
		} elseif ($services[0] == "roomservice") {
			$totalprice = "$" . ($price + $price_roomservice);
		} elseif ($services[0] == "breakfast") {
			echo 'break';
			$totalprice = "$" . ($price + $price_breakfast);
		} else {
			$totalprice = "$" . $price;
		}
	} else {
		$totalprice = "$" . $price;
	}
?>

<body>
	<table border="1">
		<tr>
			<td>Booking Number</td>
			<td>Name</td>
			<td>Check-In</td>
			<td>Check-Out</td>
			<td>Room Type</td>
			<td>Phone Number</td>
			<td>Service</td>
			<td>Total Price</td>
		</tr>

		<tr>
			<td> <?= $bookingnumber ?> </td>
			<td> <?= $name ?> </td>
			<td> <?= $checkin ?> </td>
			<td> <?= $checkout ?> </td>
			<td> <?= $roomtype ?> </td>
			<td> <?= $phonenumber ?> </td>
			<td>
				<?php 
					if (isset($_POST['services']) != Null) {
						if ( count($services) != 0) {
							foreach ($services as $value) {
								echo '<ul>';
								echo '<li>'. $value .'</li>';
								echo '</ul>';
							}
						}
					} else {
						echo 'No Service';
					}
				?>
			</td>
			<td> <?= $totalprice ?> </td>
		</tr>
	</table>
</body>

