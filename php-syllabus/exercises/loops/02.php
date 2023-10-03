<?php

echo "Input number of terms: ";
$terms = (int)readline();

echo "Enter the base number: ";
$base = (int)readline();

$result = 1;

for ($i = 1; $i <= $terms; $i++) {
    $result *= $base;
}

echo "The result of $base raised to the power of $terms is: $result\n";

