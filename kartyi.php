<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
<title>menu012</title>

</head>

<body>
<?php

$karty = array(
					'6' => 'шість',
					'7' => 'сім',
					'8' => 'вісім',
					'9' => 'девять',
					'10' => 'десять',
					'11' => 'валет',
					'12' => 'дама',
					'13' => 'король',
					'14' => 'туз',
					);


if(!empty($_POST['karta']) AND $_POST['karta'] > 5 AND $_POST['karta'] < 15) {
	$key = $_POST['karta'];
	echo "ви вибрали карту - ".$karty[$key];
}
?>
<form action="kartyi.php" method="post">
	<input type="text" name="karta">
	<input type="submit">
<br><br>
<form action="kartyi.php" method="post">
	<input type="text" name="imya"><br><br>
	<input type="text" name="familia"><br><br>
	<input type="text" name="pobatkovi">
	<input type="submit">
<br><br>
<?php
$text = "abc";
$int = 123;
echo $text;
echo "<br>";
echo $text[1];
echo "<br>";
echo $int;
echo "<br>";


if(!empty($_POST['karta'])) {
	if(is_numeric($_POST['karta'])) {
		$chars = preg_split('//', $_POST['karta'], -1, PREG_SPLIT_NO_EMPTY);
		foreach ($chars as $value) {
			$ost = $ost + $value;
		}
	}
}
echo $ost;
echo "<br>";
echo "<br>";
if(!empty($_POST['karta'])) {
	if(is_numeric($_POST['karta']) AND $_POST['karta'] > 0 AND $_POST['karta'] < 10000) {
$aa = 0;
for ($i=1; $i < 10000; $i++) { 
	$aa++;
	if($aa == 4) {
		$rik[$i] = 'високосний';
		$aa = 0;
	} else {
		$rik[$i] = 'не високосний';
	}

}
echo $rik[$_POST['karta']];
}}
echo "<br>";
echo "<br>";
if(!empty($_POST['imya']) AND !empty($_POST['familia']) AND !empty($_POST['pobatkovi'])) {
	echo $_POST['imya'].' ';
	$bukvi_fam = iconv_strlen($_POST['familia']);
	$bukvi_pob = iconv_strlen($_POST['pobatkovi']);
	$bukvi_fam = $bukvi_fam - 2;
	$bukvi_pob = $bukvi_pob - 2;
	echo substr($_POST['familia'], 0, -$bukvi_fam ).". ";
	echo substr($_POST['pobatkovi'], 0, -$bukvi_pob ).". ";
}
echo "<br>";
echo "<br>";
$cislo = rand(35484587, 48569865274584145);
$cifra = rand(1, 9);
echo $cislo;
echo "<br>";
echo $cifra;
$cifri = preg_split('//', $cislo, -1, PREG_SPLIT_NO_EMPTY);
$vhid = 0;
foreach ($cifri as $values) {
	if($values == $cifra) {
		$vhid = $vhid +1;
	}
}
echo "<br>";
echo 'кількість входів - '.$vhid;
echo "<br>";
$cas = 0;
$q = 1;
for ($i=1; $i < 61; $i++) { 
	
	if(3 >= $q) {
	$svitlofor[$i] = 'зелене';
	} else {
	$svitlofor[$i] = 'червоне';
	$i++;
	$svitlofor[$i] = 'червоне';
	$q = $q-4;
}
$q ++;
}
echo $svitlofor[56];
echo "<br>";
echo "<br>";

function mas_fille() {
$file_knigi = file('knigi.txt');


foreach ($file_knigi as $value) {
	if(!ctype_space($value)) {
		$array[] = $value;
	} else {
		$massiv[] = $array;
		unset($array);
	}
}

return $massiv;

}


$result_knigi = mas_fille();

function status_knig($result_knigi) {
	foreach ($result_knigi as $value) {
		if($value[3] == 1) {
			foreach ($value as $val) {
				$status_one[] = $val;
		}
		$res_status_one[] = $status_one;
		unset($status_one);
		}
	}
	return $res_status_one;
}

echo "<br>";
$mir_status_one = status_knig($result_knigi);

function my_print($mir_status_one) {
	for ($i=0; $i < count($mir_status_one); $i++) { 
		echo "Назва книги - ".$mir_status_one[$i][0]."<br>";
		echo "Автор - ".$mir_status_one[$i][1]."<br>";
		echo "Видавництво - ".$mir_status_one[$i][2]."<br>";
		echo "<br>";
	}
}
my_print($mir_status_one);


?>



</body>
</html>