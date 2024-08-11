<?php

	require('connect.php');

	$query = "SELECT * FROM orders ORDER BY id DESC" ;
	$statement = $db->prepare($query);
	$statement->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>My Order History ~ BOBAPEG</title>
</head>
<body>
	<a href="order.php">Back to Orders</a>

	<h1>My Order History</h1>

	<ul>
		<?php while($row = $statement->fetch()): ?>
			<li>Flavour: <?= $row['flavour'] ?></li>
			<li>Sugar Level: <?= $row['sugar'] ?></li>
			<li>Topping: <?= $row['topping'] ?></li> <br>
		<?php endwhile ?>
	</ul>
</body>
</html>