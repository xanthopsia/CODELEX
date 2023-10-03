<?php

class AsciiFigure
{
    const SIZE = 5;

    public static function drawFigure(): void
    {
        $size = self::SIZE;
        $rowLength = ($size - 1) * 8;

        for ($i = 0; $i < $size; $i++) {
            $slashes = "";
            $asterisks = "";
            $backslashes = "";

            for ($j = 0; $j < ($rowLength / 2 - $i * 4); $j++) {
                $slashes .= "/";
            }

            for ($j = 0; $j < ($i * 8); $j++) {
                $asterisks .= "*";
            }

            for ($j = 0; $j < ($rowLength / 2 - $i * 4); $j++) {
                $backslashes .= "\\";
            }

            echo $slashes . $asterisks . $backslashes . PHP_EOL;
        }
    }
}

AsciiFigure::drawFigure();
