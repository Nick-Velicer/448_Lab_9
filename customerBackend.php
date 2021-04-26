<?php
$us = $_POST["username"];
$ps = $_POST["password"];
$suc = $_POST["succulent"];
$cac = $_POST["cactus"];
$flo = $_POST["flower"];
$ship = $_POST["shipping"];
$suc_amt = $suc * 5;
$cac_amt = $cac * 8;
$flo_amt = $flo * 10;
$total = $suc_amt + $flo_amt + $cac_amt + $ship;

echo "<link rel='stylesheet' href='style.css' type='text/css'>";
echo "<h3>Thank you, " . $us . "!</h3>";
echo "<p>Password: " . $ps . "</p>";

echo "<br><br><h3>Receipt:</h3>";
echo "<div>";
echo "<p>Succulents: " . $suc . " ($" . $suc_amt . ")</p>";
echo "<p>Cacti: " . $cac . " ($" . $cac_amt . ")</p>";
echo "<p>Flowers: " . $flo . " ($" . $flo_amt . ")</p>";
echo "<p>Shipping: $" . $ship . "</p>";
echo "<p>Total: $" . $total . "</p>";
echo "</div>";
?>
