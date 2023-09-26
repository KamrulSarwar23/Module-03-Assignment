<?php

// Task 1: String Manipulation


$text = "The quick brown fox jumps over the lazy dog.";

function Convert($received){
    $data = strtolower($received);
    $modified = str_replace("brown", "red", $data);

    echo $modified;
}

Convert($text);