<?php

const MAX_ROWS = 3;
const MAX_COLUMNS = 4;

$symbols = [
    '7' => ['pay' => 5],
    'BAR' => ['pay' => 10],
    'CHERRY' => ['pay' => 15],
    'BELL' => ['pay' => 20],
];

$winningPatterns = [
    [0, 1, 2],
    [4, 5, 6],
    [8, 9, 10],
    [0, 1, 2, 3],
    [4, 5, 6, 7],
    [8, 9, 10, 11],
    [8, 5, 2, 3],
    [0, 5, 10, 11],
    [8, 5, 2],
    [0, 5, 10],
];

function generateBoard(array $symbols): array
{
    $board = [];
    for ($row = 0; $row < MAX_ROWS; $row++) {
        $board[$row] = [];

        for ($column = 0; $column < MAX_COLUMNS; $column++) {
            $symbolKeys = array_keys($symbols);
            $randomSymbol = $symbolKeys[array_rand($symbolKeys)];
            $board[$row][] = $randomSymbol;
        }
    }

    return $board;
}

function displayBoard(array $board): void
{
    echo "====================" . PHP_EOL;
    foreach ($board as $row) {
        echo "| " . implode(" | ", $row) . " |" . PHP_EOL;
    }
    echo "====================" . PHP_EOL;
}

function calculatePayout(array $board, array $winningPatterns, array $symbols): int
{
    $totalPayout = 0;
    $winningSymbols = [];

    foreach ($winningPatterns as $pattern) {
        $symbolsInPattern = [];

        foreach ($pattern as $index) {
            $row = floor($index / MAX_COLUMNS);
            $column = $index % MAX_COLUMNS;
            $symbol = $board[$row][$column];
            $symbolsInPattern[] = $symbol;
        }

        $uniqueSymbols = array_unique($symbolsInPattern);

        if (count($uniqueSymbols) === 1) {
            $matchingSymbol = $uniqueSymbols[0];
            $symbolCount = count(array_keys($symbolsInPattern, $matchingSymbol));

            if (!isset($winningSymbols[$matchingSymbol]) || $symbolCount > $winningSymbols[$matchingSymbol]) {
                $winningSymbols[$matchingSymbol] = $symbolCount;
            }
        }
    }

    foreach ($winningSymbols as $symbol => $symbolCount) {
        $totalPayout += $symbols[$symbol]['pay'] * $symbolCount;
    }

    return $totalPayout;
}

function displayResult(int $payout): void
{
    if ($payout > 0) {
        echo "Congratulations! You won $payout points!" . PHP_EOL;
    } else {
        echo "You lost!" . PHP_EOL;
    }
}

$playerPoints = 20;
while ($playerPoints > 0) {
    echo "Your points: $playerPoints" . PHP_EOL;
    $choice = readline("Do you want to play slots? (y/n)");

    if (strtolower($choice) !== "y") exit;

    $playerPoints--;

    $board = generateBoard($symbols);
    displayBoard($board);

    $payout = calculatePayout($board, $winningPatterns, $symbols);
    displayResult($payout);

    if ($payout > 0) {
        $playerPoints += $payout += 1;
    }
}

echo "You ran out of points" . PHP_EOL;
echo "Thank you for playing!" . PHP_EOL;
