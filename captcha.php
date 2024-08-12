<?php

	session_start();

	$font_size = 20;
	$captcha = '';
	$image = imagecreatetruecolor(150, 50);

	$background_colour = imagecolorallocate($image, red, green, blue);
	$text_color = imagecolorallocate($image, red, green, blue);
	$line_color = imagecolorallocate($image, red, green, blue);

	imagefilledrectangle($image, 0, 0, 150, 50, $background_colour);

	for ($i= 0; $i < 5; $i++) { 
		imageline($image, rand(0, 150), rand(0, 50), rand(0, 150), rand(0, 50)
	}

	for ($i= 0; $i < 6; $i++) { 
		$captcha = $
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="captcha">Captcha</label>
		<input type="text" name="captcha" placeholder="Enter Captcha Code">
	</form>
</body>
</html>