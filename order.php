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
	<title>Order Online! ~ BOBAPEG</title>
	<link rel="stylesheet" type="text/css" href="styles.css">

	<h1>BOBAPEG</h1>
	<?= include('nav.php'); ?>

</head>
<body class="order">
	<h1>Order Here!</h1>
	<h3>Order Online And Have It Delivered To Your Front Door</h3>

	<a href="myOrders.php">My Order History</a>

	<form method="POST">

		<h4> Choose Your Flavour</h4>
		<select name="flavour">
			<option value="">Select Flavour</option>
			<option value="mais">mais CON FUSION CORNER yelo</option>
			<option value="blueberry">BLUE berry BOMBERS</option>
			<option value="mint">ROYAL CANADIAN MINT chocolate</option>
			<option value="strawberry">RED RIVER of strawberries</option>
		</select>

		<h4>Pick Your Sugar Level</h4>
		<select name="sugar"> 
			<option value="">Select Sugar Level</option> 
			<option value="less">Less Sugar</option>
			<option value="regular">Regular Sugar</option>
		</select>

		<h4>Choose Your Topping of Choice</h4>
		<select name="topping">
			<option value="">Select Topping</option>
			<option value="boba">BOBA (pick me!)</option>
			<option value="grass">Grass Jelly</option>
			<option value="mango">Mango Jelly</option>
			<option value="bean">Red Bean</option>
			<option value="oreo">Oreo</option>
		</select> <br> <br>
		<button type="submit" name="submit">Order Now!</button>
	</form>
</body>
</html>