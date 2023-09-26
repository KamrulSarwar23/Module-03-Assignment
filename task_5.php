<?php


// Task 5: Password Generator

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomValue = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomValue];
    }

    return $password;
}

$password = generatePassword(12);


echo $password;
