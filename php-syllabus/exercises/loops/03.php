<?php

echo "Enter first word: ";
$firstWord = readline();

echo "Enter second word: ";
$secondWord = readline();

$totalLength = strlen($firstWord) + strlen($secondWord);
$dots = max(0, 30 - $totalLength);

echo $firstWord;

for ($i = 0; $i < $dots; $i++) {
    echo ".";
}

echo $secondWord . PHP_EOL;

