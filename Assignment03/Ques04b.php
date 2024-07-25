<?php
// Create a 3x3 matrix with numbers 1 to 9
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Print the 3x3 matrix
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $matrix[$row][$col] . " ";
    }
    echo "<br>";
}
