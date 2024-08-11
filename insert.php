<?php

	require('connect.php');

?>

<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="insert">
	<h1>New Page</h1>
	<form>
		<label for="title">Title</label>
		<input type="text" name="title">

		<label for="content">Content</label>
		<input type="text" name="content">

		<button type="Submit">Submit New Page</button>
	</form>

</body>
</html>