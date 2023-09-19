<?php
function asd($num1, $num2): bool {
    return (
        $num1 === 15 || $num2 === 15 ||
        $num1 + $num2 === 15 ||
        abs($num1 - $num2) === 15
    );
}

$num1 = 15;
$num2 = 5;

if (asd($num1, $num2)) {
    echo "true";
} else {
    echo "false";
}
