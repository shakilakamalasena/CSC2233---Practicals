<?php

$donations = [12, 34, 45, 34, 48, 35, 15, 87, 40, 68, 34];

$num_students = count($donations);

sort($donations);

echo "Number of students who donated: " . $num_students . "<br><br>";
echo "Donation amounts in ascending order: " . implode(", ", $donations) . "\n";

?>