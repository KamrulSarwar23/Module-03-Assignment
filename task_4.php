<?php

// Task 4: Multidimensional Array


$studentGrades = [
    'StudentOne' => ['Math' => 70, 'English' => 80, 'Science' => 90],
    'StudentTwo' => ['Math' => 75, 'English' => 85, 'Science' => 95],
    'StudentThree' => ['Math' => 80, 'English' => 90, 'Science' => 100],
];


function Average($grades){
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "$student's Average Number is  : $average </br>";
    }
}

Average($studentGrades);