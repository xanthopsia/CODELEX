<?php

$x = "===============================\n";

echo "Exercise 1: \n";
$a = 10;
$b = "10";

// echo 10 === "10"
if ($a === $b) {
    echo "Variables are the same \n";
    return;
}
else {
    echo "Variables are different \n";
}

echo $x;

echo "Exercise 2: \n";
$c = 50;
// echo $c >= 1 && $c <= 100;
if ($c >= 1 && $c <= 100) {
    echo "Number is in range of 1 and 100\n";
}
else {
    echo "Number is not in range of 1 and 100\n";
}
echo $x;

echo "Exercise 3: \n";
$str = "Hello";
if ($str == "Hello") {
    echo "World \n";
}
else {
    echo "Passed string is not 'Hello'\n";
}
echo $x;

echo "Exercise 4: \n";
$d = 1337;
if ($d > 5 && $d < 1338 && ($d % 2 === 0)) {
    echo "Yes \n";
}
else {
    echo "No \n";
}
echo $x;

echo "Exercise 5: \n";
$e = 50;
$r1 = 10;
$r2 = 60;
if ($e >= $r1 && $e <= $r2) {
    echo "Correct \n";
}
else {
    echo "No \n";
}
echo $x;

echo "Exercise 6: \n";
$plateNumber = "QWE-1337";
switch ($plateNumber) {
    case "QWE-1337":
        echo "Plate number belongs to your car \n";
        break;
    default:
        echo "$plateNumber \n";
        break;
}
echo $x;

echo "Exercise 7: \n";
$number = 1337;
switch ($number) {
    case $number < 50:
        echo "low\n";
        break;
    case $number > 50 && $number < 100:
        echo "medium\n";
        break;
    case $number > 100:
        echo "high\n";
        break;
    default:
        echo "asd\n";
}
echo $x;