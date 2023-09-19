<?php

$fruits = array(
    array("fruit" => "apple", "weight" => 4),
    array("fruit" => "banana", "weight" => 11),
    array("fruit" => "mango", "weight" => 6),
    array("fruit" => "watermelon", "weight" => 15)
);
function isOver10Kg($weight): bool{
    return $weight > 10;
}

$shippingCosts = array(
    "under10Kg" => 1,
    "over10Kg" => 2
);

foreach ($fruits as $i) {
    $fruit = $i["fruit"];
    $weight = $i["weight"];

    $shippingCost = isOver10Kg($weight) ? $shippingCosts["over10Kg"] : $shippingCosts["under10Kg"];

    echo "Fruit: $fruit, weight: $weight kg, shipping cost: $shippingCost euros\n";
}