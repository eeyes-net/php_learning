<?php
$array = [
    'name' => 'Bob',
    'gender' => 1,
    'friends' => [
        [
            'name' => 'Jack',
            'gender' => 1,
        ],
        [
            'name' => 'Alice',
            'gender' => 0,
        ],
    ],
];
var_dump($array);
var_dump($array['name']);
var_dump($array['gender']);
var_dump($array['friends']);
var_dump($array['friends'][0]);
var_dump($array['friends'][0]['name']);
