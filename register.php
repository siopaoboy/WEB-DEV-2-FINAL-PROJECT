<?php

	require('connect.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Now!</title>
</head>
<body>
	<h1>Become a BOBAPEGGER Today!</h1>

	<form method="POST" action="register.php">
		<label for="usernameRegister">Username:</label>
		<input type="text" name="usernameRegister"> <br> <br>
		<label for="passwordRegister">Password:</label>
		<input type="text" name="passwordRegister"> <br> <br>
		<button name="register" type="submit">Register</button>
	</form>

	<p> Already a member? <p> <a href="login.php">Login Here!</a>
</body>
</html>