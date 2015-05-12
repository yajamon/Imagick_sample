<?php
	$gray = new Imagick();
	$gray->newImage(200, 200, 'gray');
	$gray->setImageFormat('png32');
	$gray->setOption("png:format", 'png32');
	
	$white = new Imagick();
	$white->newImage(200, 200, 'white');
	$white->setImageFormat('png32');
	$white->setOption("png:format", 'png32');

	$black = new Imagick();
	$black->newImage(200, 200, 'black');
	$black->setImageFormat('png32');
	$black->setOption("png:format", 'png32');
	
	$mask_one = new Imagick();
	$mask_one->newImage(200, 200, 'white');
	$mask_one->setImageFormat('png32');
	$mask_one->setOption("png:format", 'png32');	
	$rect_one = new ImagickDraw();
	$rect_one->setFillColor('black');
	$rect_one->rectangle(25, 25, 175, 75);	
	$mask_one->drawImage($rect_one);

	$gray->setImageClipMask($mask_one);

	$gray->compositeImage($white, imagick::COMPOSITE_OVER, 0, 0);
	
	$mask_two = new Imagick();
	$mask_two->newImage(200, 200, 'white');
	$mask_two->setImageFormat('png32');
	$mask_two->setOption("png:format", 'png32');	
	$rect_two = new ImagickDraw();
	$rect_two->setFillColor('black');
	$rect_two->rectangle(25, 125, 175, 175);	
	$mask_two->drawImage($rect_two);

	$gray->setImageClipMask($mask_two);
	
	$gray->compositeImage($black, imagick::COMPOSITE_OVER, 0, 0);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>DrawRect</title>
	<link rel="stylesheet" href="../vendor/highlight/styles/solarized_dark.css">
	<script src="../vendor/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
	<h1>DrawRect</h1>
	<img alt="image" src="data:image/png;base64,<?php echo base64_encode($gray) ?>">
	<p>format:<?php echo $gray->getImageFormat(); ?></p>
	
	<p>
		<h3>PHP</h3>
		<pre><code class="php">
$gray = new Imagick();
$gray->newImage(200, 200, 'gray');
$gray->setImageFormat('png32');
$gray->setOption("png:format", 'png32');

$white = new Imagick();
$white->newImage(200, 200, 'white');
$white->setImageFormat('png32');
$white->setOption("png:format", 'png32');	

$mask_one = new Imagick();
$mask_one->newImage(200, 200, 'white');
$mask_one->setImageFormat('png32');
$mask_one->setOption("png:format", 'png32');	
$rect_one = new ImagickDraw();
$rect_one->setFillColor('black');
$rect_one->rectangle(50, 50, 150, 150);	
$mask_one->drawImage($rect_one);

$gray->setImageClipMask($mask_one);

$gray->compositeImage($white, imagick::COMPOSITE_OVER, 0, 0);
		</code></pre>
	</p>
	<p>
		<h3>HTML</h3>
		<pre><code class="html">
&lt;img alt="image" src="data:image/png;base64,&lt;?php echo base64_encode($gray) ?&gt;"&gt;
		</code></pre>
	</p>
</body>
</html>
