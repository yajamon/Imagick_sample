<?php
	$image = new Imagick();
	$image->newImage(200, 100, 'black');
	$image->setImageFormat('png32');
	$image->setOption("png:format", 'png32');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>OutputBlackImage</title>
</head>
<body>
	<h1>OutputBlackImage</h1>
	<img alt="black image" src="data:image/png;base64,<?php echo base64_encode($image) ?>">
	<p>format:<?php echo $image->getImageFormat(); ?></p>
</body>
</html>
