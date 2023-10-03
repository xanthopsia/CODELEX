<?php

class RollTwoDice
{
    public static function getUserInput(): int
    {
        echo "Enter the desired sum: ";
        return (int)readline();
    }

    public static function rollDice(): int
    {
        return rand(1, 6);
    }

    public static function rollUntilDesiredSum($desiredSum): void
    {
        echo "Desired sum: $desiredSum" . PHP_EOL;
        $rolledSum = 0;

        while ($rolledSum !== $desiredSum) {
            $dice1 = self::rollDice();
            $dice2 = self::rollDice();
            $rolledSum = $dice1 + $dice2;

            echo "$dice1 and $dice2 = $rolledSum" . PHP_EOL;
        }
    }
}

$desiredSum = RollTwoDice::getUserInput();
RollTwoDice::rollUntilDesiredSum($desiredSum);
