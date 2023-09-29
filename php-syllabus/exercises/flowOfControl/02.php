<?php
// no check of user input, assuming int is passed

echo "Enter the number: ";
$number = (int) readline();

if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}
