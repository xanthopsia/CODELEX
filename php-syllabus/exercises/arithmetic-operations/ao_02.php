<?php
function checkOddEven($number): string {
    if ($number % 2 === 0) {
        return "Even Number";
    } else {
        return "Odd Number";
    }
}

$number = 7;
$result = checkOddEven($number);
echo $result ."\nbye!";

