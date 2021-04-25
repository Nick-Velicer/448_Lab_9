<?php

$correct = ["15", "36", "60", "42", "72"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$questions = [$q1, $q2, $q3, $q4, $q5];

$total = 0;
for ($i = 0; $i < 5; $i++) {
	echo "<p>You answered: " . $questions[$i] . "</p>";
	echo "<p>Correct answer: " . $correct[$i] . "</p>";
	echo "<br>";
	if ($correct[$i] == $questions[$i]) {
		$total += 1;
	}
}
echo "<h1>Total correct: " . $total . "/5</h1>";
?>
			