<?php
$array = [
    false,
    true,
    3,
    "4",
    [
        5,
        null,
    ],
];
var_dump($array);
var_dump($array[0]);
var_dump($array[1]);
var_dump($array[2]);
var_dump($array[3]);
var_dump($array[4]);
var_dump($array[4][0]);
var_dump($array[4][1]);