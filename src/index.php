<?php 
	$targetPath = "/samples";
	$targetDir = __DIR__.$targetPath;
	
	$fileNames = fileList($targetDir);
	
	function fileList($path) {
		$fileList = [];
		$handle = opendir($path);
		
		if($handle == false){
			throw new Exception("Can't open directory handle.");
		}

		while (false !== ($entry = readdir($handle))) {
			if ($entry == "." || $entry == "..") {
				continue;
			}
			$fileList[] = $entry;
		}
		
		closedir($handle);
		return $fileList;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ImagickSamples</title>
</head>
<body>
	<h1>Imagick samples</h1>
	<ul>
		<?php foreach($fileNames as $name): ?>
			<li><a href="<?php echo ".{$targetPath}/$name"?>"><?php echo $name ?></a></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>