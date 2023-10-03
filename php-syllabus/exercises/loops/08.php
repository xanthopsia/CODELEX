<?php

class NumberSquare
{
    public static function generateNumberSquare($min, $max)
    {
        for ($i = $min; $i <= $max; $i++) {
            for ($j = $i; $j <= $max; $j++) {
                echo $j;
            }
            for ($j = $min; $j < $i; $j++) {
                echo $j;
            }
            echo PHP_EOL;
        }
    }
}

echo "Min? ";
$min = (int)readline();

echo "Max? ";
$max = (int)readline();

NumberSquare::generateNumberSquare($min, $max);

