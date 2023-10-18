<?php
// no check of user input, assuming int is passed
echo "Input the 1st number: ";
$num1 = (int) readline();

echo "Input the 2nd number: ";
$num2 = (int) readline();

echo "Input the 3rd number: ";
$num3 = (int) readline();

$maxNumber = max($num1, $num2, $num3);

echo "The largest number is: $maxNumber\n";
