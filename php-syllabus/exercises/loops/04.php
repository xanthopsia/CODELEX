<?php

class FizzBuzz
{
    public static function printFizzBuzz($maxValue)
    {
        for ($i = 1; $i <= $maxValue; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 == 0) {
                echo "Fizz ";
            } elseif ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }

            if ($i % 20 == 0) {
                echo PHP_EOL;
            }
        }
    }
}

echo "Max value? ";
$maxValue = (int)readline();

FizzBuzz::printFizzBuzz($maxValue);

