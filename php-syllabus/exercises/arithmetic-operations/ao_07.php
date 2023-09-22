<?php
function calculatePosition($acceleration, $time, $initialVelocity, $initialPosition): float
{
    return 0.5 * $acceleration * pow($time, 2) + $initialVelocity * $time + $initialPosition;
}

$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPosition = 0;

$result = calculatePosition($acceleration, $time, $initialVelocity, $initialPosition);

echo "Position after $time seconds: $result meters\n";
