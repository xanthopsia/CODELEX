<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$value = readline();

if (in_array($value, $numbers)) {
    echo $value . ' is in the array';
} else {
    echo $value . ' is not in the array';
}
