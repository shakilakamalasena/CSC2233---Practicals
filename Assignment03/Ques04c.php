<?php
$students = [
    "Dulani" => ["Physics" => 35, "Maths" => 67, "Chemistry" => 60],
    "Rada" => ["Physics" => 37, "Maths" => 56, "Chemistry" => 43],
    "Rajini" => ["Physics" => 57, "Maths" => 62, "Chemistry" => 58]
];

// Display the results of students for each subject and calculate total and mean values
foreach ($students as $name => $subjects) {
    $total = 0;
    $num_subjects = count($subjects);
    echo "Results for $name:<br>";
    foreach ($subjects as $subject => $marks) {
        echo "$subject: $marks<br>";
        $total += $marks;
    }
    $mean = $total / $num_subjects;
    echo "Total: $total<br>";
    echo "Mean: $mean<br><br>";
}
