<?php

$array = array(1, 2, 3, 4.5, "asd");

function doubleInt($number)
{
    if (is_int($number)) {
        return $number * 2;
    } else {
        return $number;
    }
}

for ($i = 0; $i < count($array); $i++) {
    $element = $array[$i];
    if (is_int($element)) {
        $doubledInt = doubleInt($element);
        echo "Doubled int at index $i: $doubledInt\n";
    }
}