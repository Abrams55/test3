<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>

<?php
$a = 26;
$b = 20;
for ($i=0; $i < $a; $i++) { 

	$masiv[$i] = $b;
	$b ++;

}

print_r($masiv);
echo '<br>';
$vall = array();
foreach ($masiv as $key => $value) {
	$value = $value / 5;

	if(!is_int($value)) {
		continue;
	} else {
		echo $key. ' ___ ';
		echo $masiv[$key];
		echo ' / 5 = ';
		echo $value;
		echo '<br>';
		$vall[] =$masiv[$key];
}
}
print_r($vall);
echo '<br>';
foreach ($vall as  $values) {
	$summa = $summa + $values;
}
echo $summa;
?>

</body>
</html>