<?php 

$cook = 2;

$cook = setcookie('testcoolie', $cook); 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>
</head>

<?php 
function set_file() {
	$dir =  'licilnik.txt';
	$r = fopen($dir, 'r');
	$text = fread($r, filesize($dir));
	fclose($r);

	return $text;
}
$text = set_file($cook);



echo $text;
function get_file($text, $cook) {
	$text = $text + 1;
	$dir =  'licilnik.txt';
	$w = fopen($dir, 'w');
	fwrite($w, $text);
	fclose($w);
	if($cook < 10) {
		$cook = $cook + 5;
	}
	return $cook;
}

$cook = get_file($text, $cook);

	if($cook < 1) {
		$cook = $cook + 5;
		echo 222;
	}
echo $cook;


 ?>



</body>
</html>