<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>membuat cookie</title>
</head>
<body>
<?php
	if (isset($_COOKIE['cookie1'])) {
		echo "<h1>Cookie ditemukan. Nilai cookie adalah ".$_COOKIE['cookie1']."</h1>";
	}
	else{

		echo "<h1>Maaf, Cookie tidak ditemukan</h1>";
	}

?>
</body>
</html>