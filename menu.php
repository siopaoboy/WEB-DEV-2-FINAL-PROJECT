<?php

	require('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Menu</title>

	<form method="post">
		<label for="Search:"></label>
		<input type="text" name="search" placeholder="Search for your Boba">
		<input type="submit" name="searchSubmit"> 
	</form> 
</head>
<body>
	<h1>Order Menu</h1>
	<?= include('nav.php'); ?>
</body>
</html>