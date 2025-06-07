<?php
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);

echo "<br>";

$age = 18;

$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age >= 40 => "Old adult",
    $age > 19 => "Young adult",
};

var_dump($output);

echo "<br>";

$ages = 23;

$result = match (true) {
    $ages >= 65 => 'senior',
    $ages >= 25 => 'adult',
    $ages >= 18 => 'young adult',
    default => 'kid',
};

var_dump($result);
?>