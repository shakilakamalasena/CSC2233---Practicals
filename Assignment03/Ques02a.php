<?php

$age = array("Nimal" => "35", "Kamal" => "37", "ama" => "43");
echo "Nimal is " . $age['Nimal'] . " years old.";
echo "<br><br>";

?>

<?php
$age = array("Nimal" => "35", "Kamal" => "37", "ama" => "43");
foreach ($age as $key => $value) {
    echo $key . " is " . $value . " years old";
    echo "<br>";
}
?>