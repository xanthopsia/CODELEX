<?php

$start = 1;
$end = 110;
$numbersPerLine = 11;

for ($i = $start; $i <= $end; $i++) {
    $output = '';

    if ($i % 3 == 0) {
        $output .= 'Coza';
    }
    if ($i % 5 == 0) {
        $output .= 'Loza';
    }
    if ($i % 7 == 0) {
        $output .= 'Woza';
    }

    if (empty($output)) {
        $output = $i;
    }

    echo $output . ' ';

    if ($i % $numbersPerLine == 0) {
        echo "\n";
    }
}

/* for ($i = 1; $i <= 110; $i++) {
    $output = ($i % 3 == 0 ? 'Coza' : '') . ($i % 5 == 0 ? 'Loza' : '') . ($i % 7 == 0 ? 'Woza' : '') ?: $i;
    echo $output . ' ' . ($i % 11 == 0 ? PHP_EOL : '');
}*/
