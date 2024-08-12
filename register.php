<?php

	require('connect.php');

	// if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['reenter'])) {

	// 	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	// 	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	// 	$reenter = filter_input(INPUT_POST, 'reenter', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	// 	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


	// 	if ($username === $reenter) {

	// 	$hash = password_hash($password, PASSWORD_DEFAULT); 
			
    //     $query = "INSERT INTO register (username, password) VALUES (:username, :password)";
    //     $statement = $db->prepare($query);
        
    //     $statement->bindValue(':username', $username);
    //     $statement->bindValue(':password', $hash);
        
    //     if ($statement->execute()) {
    //     	echo "You are now a BOBAPEGGER";

    //     } else {
    //     	echo "An error has occured";
    //     }
    	
	// 	} else {
	// 		echo "Passwords do not match";
	// 	}

	// } else {
	// 	echo "Please enter a username and password";

	// } 		*note: registration form is not submittting the data
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<title>Register Now!</title>
</head>
<body>
	<h1>Become a BOBAPEGGER Today!</h1>

	<form method="POST" action="register.php">
		<label for="usernameRegister">Username:</label>
		<input type="text" name="usernameRegister"> <br> <br>

		<label for="passwordRegister">Password:</label>
		<input type="text" name="passwordRegister"> <br> <br>

		<label for="reenter">Re-Enter Password:</label>
		<input type="text" name="reenter"> <br> <br>

		<button name="register" type="submit">Register</button> 
	</form> <br>

	<p><strong> Already a member? </strong><p> <a href="login.php">Login Here!</a>
</body>
</html>