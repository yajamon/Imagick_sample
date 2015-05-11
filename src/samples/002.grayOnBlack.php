<?php
	$black = new Imagick();
	$black->newImage(200, 200, 'black');
	$black->setImageFormat('png32');
	$black->setOption("png:format", 'png32');

	$gray = new Imagick();
	$gray->newImage(200, 200, 'gray');
	$gray->setImageFormat('png32');
	$gray->setOption("png:format", 'png32');
	
	$black->compositeImage($gray, imagick::COMPOSITE_OVER, 50, 50);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>GrayOnBlack</title>
	<link rel="stylesheet" href="../vendor/highlight/styles/solarized_dark.css">
	<script src="../vendor/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
	<h1>GrayOnBlack</h1>
	<img alt="black image" src="data:image/png;base64,<?php echo base64_encode($black) ?>">
	<p>format:<?php echo $black->getImageFormat(); ?></p>
	
	<p>
		<h3>PHP</h3>
		<pre><code class="php">
$black = new Imagick();
$black->newImage(200, 200, 'black');
$black->setImageFormat('png32');
$black->setOption("png:format", 'png32');

$gray = new Imagick();
$gray->newImage(200, 200, 'gray');
$gray->setImageFormat('png32');
$gray->setOption("png:format", 'png32');

$black->compositeImage($gray, imagick::COMPOSITE_OVER, 50, 50);
		</code></pre>
	</p>
	<p>
		<h3>HTML</h3>
		<pre><code class="html">
&lt;img alt="black image" src="data:image/png;base64,&lt;?php echo base64_encode($black) ?&gt;"&gt;
		</code></pre>
	</p>
</body>
</html>
