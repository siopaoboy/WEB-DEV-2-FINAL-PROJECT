<?php

	require('connect.php');

	if ($_POST && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['score'])) {

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $score = filter_input(INPUT_POST, 'score', FILTER_SANITIZE_NUMBER_INT);

    $query = "INSERT INTO reviews (title, review, score) VALUES (:title, :review, :score)";

    $statement = $db->prepare($query);
        
    $statement->bindValue(':title', $title);
    $statement->bindValue(':review', $review);
    $statement->bindValue(':score', intval($score));
  
    $statement->execute();

    header("Location: reviews.php");
  }

  	// $display = "SELECT * FROM reviews ORDER BY DESC";

	// $statement = $db->prepare($display);

	// $statement->execute(); 	*note: make sure the data is being sent to the database before uncommneting this code
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/reviews.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Reviews ~ BOBAPEG</title>
	<?= include('nav.php') ?>
</head>
<body class="list">

	<h1><u>Reviews</u></h1> <br>

	<h3>Tell us what you think!</h3> <br>
	<form method="POST" action="reviews.php">
		<label for="title">Give a title to your review:</label>
		<input type="text" name="title" required> <br> <br>

		<label for="review">Write your review here:</label> <br>
		<textarea name="review" rows="4" cols="50" required></textarea> <br> <br>

		<label for="score">Score:</label>
		<input type="number" name="score" placeholder="Rate it out of 5" required> <br> <br>

		<button name="submit" type="submit">Submit Review</button>
	</form> <br> <br>

	<h2>Take a look at what our BOBAPEGGERS had to say from us!</h2>
	<!-- 	<ul>
		<?php while($row = $statement->fetch()): ?>
			<li><h3><?= $row['title'] ?></h3></li>
			<li><p><?= $row['content'] ?></p></li>
			<li>Created/Updated:<?= $row['date'] ?></li>
			<li><?= $row['score'] ?>/5</li>
			<a href="">Edit Review</a> 
		<?php endwhile ?> <br>

		*note: display results once you fix values being sent to the database	
	</ul> -->

	<h4><i>We would love to hear feedback from our BOBAPEGGERS!</i><h4>
</body>
</html>