<?php

	require('connect.php');

	if ($_POST && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['score'])) {

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $score = filter_input(INPUT_POST, 'score', FILTER_SANITIZE_NUMBER_INT);

    $query = "INSERT INTO reviews (title, review, score,) VALUES (:title, :review, :score)";
    $statement = $db->prepare($query);
        
    $statement->bindValue(':title', $title);
    $statement->bindValue(':review', $review);
    $statement->bindValue(':score', $score, PDO::PARAM_INT);
        
    if ($statement->execute()) {
    	echo "Review has been submitted successfully";
    } else {
    	echo "An error has occured when submitting the review. Try again.";
    }

  }
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
<body>
	<h1>Reviews</h1>
	<h3>BOBAPEG is an ever growing business that would love to hear what customers want in order for us to grow.</h2>

	<h4>We would love to hear your feedback!</p> <br>

	<h3>Let us know what you think about us!</h3>
	<form method="POST" action="reviews.php">
		<label for="title">Give a title to your review:</label>
		<input type="text" name="title"> <br> <br>
		<label for="review">Write your review here:</label> <br>
		<textarea name="review" rows="4" cols="50"></textarea> <br> <br>
		<label for="score">Score:</label>
		<input type="number" name="score" placeholder="Rate it out of 5"> <br> <br>
		<button name="submit" type="submit">Submit Review</button>
	</form>
</body>
</html>