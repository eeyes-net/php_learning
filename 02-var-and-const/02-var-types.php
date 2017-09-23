<?php

$number1 = 1;
$number2 = -2;
$float1 = 1.23;
$float2 = 1.2e34;
$string1 = 'Hello, ';
$string2 = "world!";
$array1 = array(false, true, 3, "4", array(5, null));
$array2 = [
    false,
    true,
    3,
    "4",
    [
        5,
        null,
    ]
];

echo $number1, "\n";
echo $number2, "\n";
echo $float1, "\n";
echo $float2, "\n";
echo $string1;
echo $string2, "\n";
echo $array1, "\n";
echo $array2, "\n";

var_dump($number1);
var_dump($number2);
var_dump($float1);
var_dump($float2);
var_dump($string1);
var_dump($string2);
var_dump($array1);
var_dump($array2);