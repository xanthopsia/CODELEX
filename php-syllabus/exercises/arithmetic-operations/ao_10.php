<?php

class Geometry
{
    public static function circleArea($radius)
    {
        if ($radius < 0) {
            return "Error: Negative radius is not allowed.";
        }
        return M_PI * $radius * $radius;
    }

    public static function rectangleArea($length, $width)
    {
        if ($length < 0 || $width < 0) {
            return "Error: Negative length or width is not allowed.";
        }
        return $length * $width;
    }

    public static function triangleArea($base, $height)
    {
        if ($base < 0 || $height < 0) {
            return "Error: Negative base or height is not allowed.";
        }
        return 0.5 * $base * $height;
    }
}

function displayMenu()
{
    echo "Geometry calculator:\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";
    echo "Enter your choice (1-4): ";
}

while (true) {
    displayMenu();
    $choice = trim(readline());

    switch ($choice) {
        case 1:
            echo "Enter the radius of the circle: ";
            $radius = trim(readline());
            echo "Area of the circle: " . Geometry::circleArea($radius) . "\n";
            break;
        case 2:
            echo "Enter the length of the rectangle: ";
            $length = trim(readline());
            echo "Enter the width of the rectangle: ";
            $width = trim(readline());
            echo "Area of the rectangle: " . Geometry::rectangleArea($length, $width) . "\n";
            break;
        case 3:
            echo "Enter the base of the triangle: ";
            $base = trim(readline());
            echo "Enter the height of the triangle: ";
            $height = trim(readline());
            echo "Area of the triangle: " . Geometry::triangleArea($base, $height) . "\n";
            break;
        case 4:
            echo "Quit \n";
            exit;
        default:
            echo "Invalid choice. Please enter a number between 1 and 4.\n";
    }
}

