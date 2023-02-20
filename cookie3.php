<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hitung kunjungan</title>
</head>
<body>
<?php
	if (isset($_COOKIE['counter'])) {
	$c = $_COOKIE['counter'];
	$c = $c+1;
	setcookie("counter",$c);
	echo "<h1> anda sudah mengunjungi halaman ini sebanyak ".$c." kali</h1>";
	}
	else{
		echo "<h1>anda sudah mengunjungi halaman ini sebanyak 1 kali</h1>";
		setcookie("counter","0");



	}
?>
</body>
</html>