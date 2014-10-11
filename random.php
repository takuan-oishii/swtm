<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>random</title>
</head>
<body>
<?php
if ($dir = opendir("files")) {
	$files = array();
	while (($file = readdir($dir)) !== false) {
		array_push($files,$file);
	}
	$del = array_search(".", $files);
	unset($files[$del]);
	$del = array_search("..", $files);
	unset($files[$del]);

	$files = array_values($files);
	$i = rand( 0, count($files)-1);

	echo "<IMG src=\"hoge.php?name=".$files[$i]."\">";
    closedir($dir);
}
?>

<h1><a href="random.php" >ランダム表示</a></h1>
</body>
</html>