<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$average = array_sum($numbers) / count($numbers);

echo 'Average is ' . round($average, 2);
