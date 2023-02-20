<?php
$indukan = $_POST['induk'];
setcookie("induk", $indukan);
$namaan = $_POST['nama'];
setcookie("nama", $namaan);
$statusan = $_POST['status'];
setcookie("status", $statusan);
$minatan = $_POST['minat'];
setcookie('minat',implode(",", $minatan));





echo "<h1>BERHASIL DAFTAR</h1>";










?>