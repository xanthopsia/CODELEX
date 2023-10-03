<?php

class Piglet
{
    public static function playPiglet()
    {
        echo "Welcome to Piglet!" . PHP_EOL;
        $totalScore = 0;

        while (true) {
            $roll = rand(1, 6);
            echo "You rolled a $roll!" . PHP_EOL;

            if ($roll === 1) {
                $totalScore = 0;
                break;
            }

            $totalScore += $roll;
            echo "Roll again? (y/n) ";

            if (strtolower(trim(readline())) !== 'y') {
                break;
            }
        }

        echo "You got $totalScore points." . PHP_EOL;
    }
}

Piglet::playPiglet();
