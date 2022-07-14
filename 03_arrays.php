<?php

$numbers = [1, 2, 3, 4, 5];
$fruits = ['apple', 'banana', 'orange'];

// print_r($numbers[1]);
// var_dump($numbers);

// associative array
$hex = [
    'red' => '#ff0000',
    'green' => '#00ff00',
    'blue' => '#0000ff'
];

// print_r($hex['red']);

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'age' => 35
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 30
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'age' => 25
    ]
    ];

    var_dump(json_encode($people));

?>