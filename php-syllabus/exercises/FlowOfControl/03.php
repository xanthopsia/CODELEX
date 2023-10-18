<?php

echo "Enter a positive integer: ";
$number = readline();

if (!ctype_digit($number) || $number <= 0) {
    echo "Invalid input. Please enter a positive integer.\n";
} else {
    $numberOfDigits = strlen($number);
    echo "The number of digits in $number is: $numberOfDigits\n";
}
