<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>

<?php
$a = 15;
for ($i=0; $i < $a; $i++) { 
	$masiv[] = rand();
}
print_r($masiv);
echo "<br><br>";

function minimum($masiv) {
	$val_min = $masiv[0];
	for ($i=0; $i < count($masiv); $i++) { 
		if($masiv[$i] < $val_min) {
			$val_min = $masiv[$i];
			$key_min = $i;
		}
	}
	echo "<br>мінімальне значення масиву - ".$val_min." - та знаходиться під ідентифікатором - ".$key_min."<br><br>";
	$val_max = $masiv[0];
	for ($b=0; $b < count($masiv); $b++) { 
		if($masiv[$b] > $val_max) {
			$val_max = $masiv[$b];
			$key_max = $b;
		}
	}
	echo "<br>максимальне значення масиву - ".$val_max." - та знаходиться під ідентифікатором - ".$key_max."<br><br>";
	echo "ключ - ".$key_min." - ".$masiv[$key_min] = $val_max."<br>";
	echo "ключ - ".$key_max." - ".$masiv[$key_max] = $val_min."<br>";
	print_r($masiv);
}
minimum($masiv);

?>


</body>
</html>