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
	<link rel="stylesheet" href="../vendor/highlight/styles/solarized_dark.css">
	<script src="../vendor/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
	<h1>OutputBlackImage</h1>
	<img alt="black image" src="data:image/png;base64,<?php echo base64_encode($image) ?>">
	<p>format:<?php echo $image->getImageFormat(); ?></p>
	
	<p>
		<h3>PHP</h3>
		<pre><code class="php">
$image = new Imagick();
$image->newImage(200, 100, 'black');
$image->setImageFormat('png32');
$image->setOption("png:format", 'png32');
		</code></pre>
	</p>
	<p>
		<h3>HTML</h3>
		<pre><code class="html">
&lt;img alt="black image" src="data:image/png;base64,&lt;?php echo base64_encode($image) ?&gt;"&gt;
		</code></pre>
	</p>
</body>
</html>
