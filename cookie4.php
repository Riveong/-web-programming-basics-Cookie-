<?php
	if (isset($_COOKIE['nama'])&&isset($_COOKIE['induk'])&&isset($_COOKIE['status'])) {
		echo "<table style='border: 1px solid black'>";
		echo "<tr style='border: 1px solid black'>";
		echo "<td style='border: 1px solid black'> nama : </td>";
		echo "<td style='border: 1px solid black'>".$_COOKIE['nama']."</td>";
		echo "</tr>";
		echo "<tr style='border: 1px solid black'>";
		echo "<td style='border: 1px solid black'> induk : </td>";
		echo "<td style='border: 1px solid black'>".$_COOKIE['induk']."</td>";
		echo "</tr>";
		echo "<tr style='border: 1px solid black'>";
		echo "<td style='border: 1px solid black'> status : </td>";
		echo "<td style='border: 1px solid black'>".$_COOKIE['status']."</td>";
		echo "</tr>";
		echo "<tr style='border: 1px solid black'>";
		echo "<td style='border: 1px solid black'> minat : </td>";
		echo "<td style='border: 1px solid black'>".$_COOKIE['minat']."</td>";
		echo "</tr>";
		echo "</table>";
	}

else {




echo"<form method='POST' action='cookie4_1.php'>";
echo"<table>";
echo"<tr>";
echo"<td> no induk </td>";
echo"<td> <input type='field' name='induk'> </td>";
echo"</tr>";

echo"<tr>";
echo"<td> nama </td>";
echo"<td> <input type='field' name='nama'> </td>	";
echo"</tr>";

echo"<tr>";
echo"<td> status </td>";
echo"<td> <input type='radio' name='status' value='dosen'>dosen <br>";
echo"<input type='radio' name='status' value='mahasiswa'>mahasiswa</td>	";
echo"</tr>";

echo"<tr>";
echo"<td> minat </td>";
echo"<td> <input type='checkbox' name='minat[]'' value='programming'>Programming <br>";
echo"<input type='checkbox' name='minat[]' value='database'>database<br>";
echo"<input type='checkbox' name='minat[]' value='networking'>networking <br>";
echo"<input type='checkbox' name='minat[]' value='multimedia'>multimedia<br>";
echo"<input type='submit' name='submit' value='submit'>";
echo"</td>";
echo"</tr>";


echo"</table>";




echo"</form>";




}












?>