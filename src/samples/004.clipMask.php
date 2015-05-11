<?php
	$gray = new Imagick();
	$gray->newImage(200, 200, 'gray');
	$gray->setImageFormat('png32');
	$gray->setOption("png:format", 'png32');
	
	$white = new Imagick();
	$white->newImage(200, 200, 'white');
	$white->setImageFormat('png32');
	$white->setOption("png:format", 'png32');	
	
	$mask = new Imagick();
	$mask->newImage(200, 200, 'white');
	$mask->setImageFormat('png32');
	$mask->setOption("png:format", 'png32');	
	$rect = new ImagickDraw();
	$rect->setFillColor('black');
	$rect->rectangle(50, 50, 150, 150);	
	$mask->drawImage($rect);

	$gray->setImageClipMask($mask);

	$gray->compositeImage($white, imagick::COMPOSITE_OVER, 0, 0);
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

$mask = new Imagick();
$mask->newImage(200, 200, 'white');
$mask->setImageFormat('png32');
$mask->setOption("png:format", 'png32');	
$rect = new ImagickDraw();
$rect->setFillColor('black');
$rect->rectangle(50, 50, 150, 150);	
$mask->drawImage($rect);

$gray->setImageClipMask($mask);

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
