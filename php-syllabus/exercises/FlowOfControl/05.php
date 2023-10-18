<?php
function convertToDigit($char) {
    $char = strtoupper($char);
    switch ($char) {
        case 'A':
        case 'B':
        case 'C':
            return 2;
        case 'D':
        case 'E':
        case 'F':
            return 3;
        case 'G':
        case 'H':
        case 'I':
            return 4;
        case 'J':
        case 'K':
        case 'L':
            return 5;
        case 'M':
        case 'N':
        case 'O':
            return 6;
        case 'P':
        case 'Q':
        case 'R':
        case 'S':
            return 7;
        case 'T':
        case 'U':
        case 'V':
            return 8;
        case 'W':
        case 'X':
        case 'Y':
        case 'Z':
            return 9;
        default:
            return null;
    }
}

echo "Enter a string: ";
$inputString = strtoupper(readline());
$outputDigits = '';

for ($i = 0; $i < strlen($inputString); $i++) {
    $char = $inputString[$i];
    if (ctype_alpha($char)) {
        $digit = convertToDigit($char);
        if ($digit !== null) {
            $outputDigits .= $digit;
        }
    }
}

echo "Phone keypad digits for $inputString are: $outputDigits\n";
