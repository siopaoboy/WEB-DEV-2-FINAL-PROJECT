<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
</head>
<body>
	<h1>Sign In To BOBAPEG!</h1>

	<form method="POST" action="login.php">
		<label for="username">Username:</label> 
		<input type="text" name="username"> <br> <br>
		<label for="password">Password:</label>
		<input type="text" name="password"> <br> <br>
		<button name="login" type="submit">Sign In</button>
	</form>

	<p> Not a member yet? <p> <a href="register.php">Register Here!</a>
</body>
</html>