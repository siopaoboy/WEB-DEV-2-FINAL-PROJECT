<?php

	require('connect.php');

	if (isset($_POST['submit'])) {
		$flavour = $_POST['flavour'];
		$sugar = $_POST['sugar'];
		$topping = $_POST['topping'];

		$query = "INSERT INTO orders (flavour, sugar, topping) VALUES (:flavour, :sugar, :topping)";

		$statement = $db->prepare($query);
        
        $statement->bindValue(':flavour', $flavour);
        $statement->bindValue(':sugar', $sugar);
        $statement->bindValue(':topping', $topping);
        
        $statement->execute();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Order Online! ~ BOBAPEG</title>
	<h1>BOBAPEG</h1>
	<?= include('nav.php'); ?>
</head>
<body class="order">

	<h1>Order Here!</h1>
	<h3>Order Online And Have It Delivered To Your Door</h3>

	<strong><a href="myOrders.php">My Order History</a></strong>

	<form method="POST">

		<h4> Choose Your Flavour</h4>
		<select name="flavour">
			<option value="">Select Flavour</option>
			<option value="mais CON FUSION CORNER yelo">mais CON FUSION CORNER yelo</option>
			<option value="BLUEberry BOMBERS">BLUEberry BOMBERS</option>
			<option value="ROYAL CANADIAN MINT chocolate">ROYAL CANADIAN MINT chocolate</option>
			<option value="RED RIVER of strawberries">RED RIVER of strawberries</option>
		</select>

		<h4>Pick Your Sugar Level</h4>
		<select name="sugar"> 
			<option value="">Select Sugar Level</option> 
			<option value="Less Sugar">Less Sugar</option>
			<option value="Regular Sugar">Regular Sugar</option>
		</select>

		<h4>Choose Your Topping of Choice</h4>
		<select name="topping">
			<option value="">Select Topping</option>
			<option value="BOBA">BOBA (pick me!)</option>
			<option value="Grass Jelly">Grass Jelly</option>
			<option value="Mango Jelly">Mango Jelly</option>
			<option value="Red Bean">Red Bean</option>
			<option value="Oreo">Oreo</option>
		</select> <br> <br>
		<button type="submit" name="submit">Order Now!</button>
	</form>
</body>
</html>