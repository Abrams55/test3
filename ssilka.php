<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>
</head>

<form action="ssilka.php" method="post">
	<input type="text" name="ssilka"><br><br>
	<input type="submit">

<?php

function set_file($post) {
	$dir = 'ssilki.txt';
	$r = fopen($dir, 'r');
	feof($r);
	while (!feof($r)) {
		$text_mas[] = fgets($r);
	}
	fclose($r);
	$post = (string) $post;
	print_r($post);
	echo '<br>';
	print_r($text_mas);
	foreach ($text_mas as $value) {
		$value = (string) $value;
		$ooo = strcasecmp($value, $post);
		echo '<br>';
		echo $ooo;
		echo '<br>';
		if($ooo != 0) {
			$resulet = 1;
	} else {
		$resulet = 0;
		break;
	}
	}
	if($resulet == 1) {
		$a = fopen($dir, 'a');
		fwrite($a, $post."\r\n");
		fclose($a);
	}
	return $text_mas;
}
$aaa = set_file($_POST['ssilka']);

		$value = "http://dokonline.com/dokumentalnie-filmi/16848-razrushiteli-osnov-bill-geyts-istoriya-uspeha-ground-breakers-bill-gates-a-tycoon-story-2012.html";
		$post = "http://dokonline.com/dokumentalnie-filmi/16848-razrushiteli-osnov-bill-geyts-istoriya-uspeha-ground-breakers-bill-gates-a-tycoon-story-2012.html";
		$post = (string) $post;
		$value = (string) $value;
		echo '<br>';
		echo '<br>';
		echo '<br>';
		$ooo = strnatcasecmp($value, $post);
		echo $ooo;
			if($ooo != 0) {
			echo 'ne pracue';
	} else {
		echo 'pracue';
	}


?>
<a href="#">aaa</a>
</body>
</html>