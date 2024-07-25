<?php

$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

//method 1 to print array values 
print $days[0] . " " . $days[1] . " " . $days[2] . " " . $days[3] . " " . $days[4] . " " . $days[5] . " " . $days[6];

//method 2 to print array values 
$arrlength = count($days);
for ($x = 0; $x < $arrlength; $x++) {
    echo $days[$x];
    echo "<br>";
}

//method 3 to print array values 
foreach ($days as $key) {
    echo $key;
    echo "<br>";
}

?>
