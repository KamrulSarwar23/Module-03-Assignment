<?php

// Task 3: Array Sorting 


function Sorting($reccived)
{

    rsort($reccived);

    return $reccived;
}

$grades = [85, 92, 78, 88, 95];

$sortedGrades = Sorting($grades);

print_r($sortedGrades);