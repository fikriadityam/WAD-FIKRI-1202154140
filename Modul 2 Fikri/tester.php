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
	$checkout = $_POST['checkout'];
	$duration = $_POST['duration'];
	$roomtype = $_POST['roomtype'];
	$phonenumber = $_POST['phonenumber'];

	$roomservice = "";
	$breakfast = "";
	$checkbox = array($roomservice, $breakfast);

	if ( ($roomservice != 0) && ($breakfast != 0) ) {
		$roomservice = $_POST['roomservice'];
		$breakfast = $_POST['breakfast'];		
	}

	$price = 100;
	// $price_roomservice = 50;
	// $price_breakfast = 75;

	// if ( count($checkbox) == 2 ) {
	// 	$totalprice = "$" . ($price + $price_breakfast + $price_roomservice);
	// } else if( $checkbox == "roomservice" ) {
	// 	$totalprice = "$" . ($price + $price_roomservice);
	// } else if( $checkbox == "breakfast" ) {
	// 	$totalprice = "$" . ($price + $price_breakfast);
	// } else if( count($checkbox) == 0 ) {
	// 	$totalprice = "$" . $price;
	// } else {
	// 	$totalprice = 0;
	// }
?>

<body>
	<table>
		<tr style="border-bottom: 1px solid #dedede; border-top: 1px solid #dedede;">
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
				<ul>
					<?php 
						if (count($checkbox) != 0) {
							foreach ($checkbox as $value) {
								echo '<li>'. $value .'</li>';
							}
						} else {
							echo '<li>No Service</li>';
						}
					?>
				</ul>
			</td>
			<td> <?= $totalprice ?> </td>
		</tr>
	</table>
</body>

