<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>
<?php

function omm(&$a) {
	echo "текуче значенн - {$a}<br>";
	$a++;
	echo "значення після збільшення - {$a}<br>";
	return $a;
}
$num = 10;
echo "do - ".$num."<br>";
omm($num);
echo "pislya - ".$num."<br>";
?>


</body>
</html>