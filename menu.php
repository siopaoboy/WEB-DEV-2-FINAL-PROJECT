<?php

	require('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Menu ~ BOBAPEG</title>
	<?= include('nav.php'); ?>

	<h1><u>Menu</u></h1> <br>

</head>
<body>
	<div class="search">
		<form method="post">
			<label for="Search:"></label>
			<input type="text" name="search" placeholder="Search for your Boba">
			<input type="submit" name="searchSubmit">
		</form>
	</div>
</body>
</html>