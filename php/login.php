<?php
	
	require('connect.php');

	session_start()

	if (isset($_POST['username']) && isset($_POST['password'])) {

		$user = $_POST['username'];
		$pass = $_POST['password'];

		$user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
		$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

		$username = "SELECT username FROM user";
		$state1 = $db->prepare($username);
		$state1->execute();

		$password = "SELECT username FROM user";
		$state2 = $db->prepare($password);
		$state2->execute();

		if ($user === $username && $pass === $password) {
			$_SESSION['username'] = $usrnm;
			setcookie('username', $usrnm, time() + 600);

			$_SESSION['password'] = $pwd;
			setcookie('password', $pwd, time() + 600);

			echo "Login Successful";
			
		} else {
			echo "Username and Password does not match."
		}
	} else {
		echo "username and password is invalid";
	}

	session_destroy();
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