<?php

$x = "===============================\n";

echo "Exercise 1: \n";
$arr1 = [1,2,3];
echo "Sum of all values in array: " .array_sum($arr1) ."\n";
echo $x;

echo "Exercise 2: \n";
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person);
echo $x;

echo "Exercise 3: \n";
$person2 = new stdClass();
$person2->name = "John";
$person2->surname = "Doe";
$person2->age = 50;
var_dump($person2);
echo $x;

echo "Exercise 4: \n";
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
$jane = $items[0][1];
echo $jane["name"] .' '. $jane["surname"] .' '.$jane["age"]. "\n";
echo $x;

echo "Exercise 5: \n";
$items2 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
$aaa = $items2[0][0]["name"];
$bbb= $items2[0][1]["name"];
echo "$aaa & $bbb Doe's \n";
echo $x;