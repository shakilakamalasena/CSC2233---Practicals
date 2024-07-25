<?php
$students = [
    "Asanka" => 59,
    "Gayan" => 86,
    "Namal" => 47,
    "Ruwan" => 68,
    "Dinuka" => 23
];

function getResult($mark)
{
    return $mark > 50 ? "Pass" : "Fail";
}

foreach ($students as $name => $mark) {
    $result = getResult($mark);
    echo "Name: $name, Marks: $mark, Result: $result<br>";
}
