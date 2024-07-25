<?php
$cars = array(
    array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15)
);

// print method 1  
echo $cars[0][0] . " " . $cars[0][1] . " " . $cars[0][2];

//print mehod 2 
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $cars[$row][$col] . " ";
    }
    echo "<br>";
}

//method 3 
echo  "method 3 <br>";
foreach ($cars  as $row) {
    foreach ($row as $cell) {
        echo $cell . " ";
    }
    echo '<br>';
}
