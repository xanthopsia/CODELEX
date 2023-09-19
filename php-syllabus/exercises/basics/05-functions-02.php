<?php
function multiply($base, $multiplier): int {
    return $base * $multiplier;
}

$base = 10;
$multiplier = 5;
$result = multiply($base, $multiplier);
echo $result;
