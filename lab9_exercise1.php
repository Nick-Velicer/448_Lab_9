<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo '<table style="width:100%">';
echo "<tr> \n";
echo "<td> </td>";
for ($i = 1; $i <= 100; $i++) {
	echo "<td>$i</td>";
}
echo "</tr>";
for ($i = 1; $i <= 100; $i++) {
	echo "<tr> \n";
    echo "<td>$i</td>";
	for ($j = 1; $j <= 100; $j++) {
		if ($j == 0) {
			$temp = $i + 1;
			echo "<td>$temp</td>";
		}
		else {
        	$temp = $i *$j;
			echo "<td>$temp</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>
			