<?php

$elements = [
    'rock' => ['scissors', 'apple'],
    'paper' => ['rock', 'banana'],
    'scissors' => ['paper', 'apple'],
    'apple' => ['banana', 'paper'],
    'banana' => ['rock', 'scissors'],
];

function determineWinner($playerChoice, $computerChoice, $elements): string
{
    if ($playerChoice == $computerChoice) {
        return "Tie";
    }

    if (in_array($computerChoice, $elements[$playerChoice])) {
        return 'You win!';
    } else {
        return 'Computer wins!';
    }
}

while (true) {
    $playerChoice = strtolower(readline("Enter your choice: "));

    if (!array_key_exists($playerChoice, $elements)) {
        echo "Invalid choice. Please choose a valid element.\n";
        continue;
    }

    $computerChoice = array_rand($elements);
    $result = determineWinner($playerChoice, $computerChoice, $elements);

    echo "Your choice: $playerChoice\n";
    echo "Computer's choice: $computerChoice\n";
    echo "Result: $result\n";

    $playAgain = strtolower(readline("Do you want to play again? (y/n): "));
    if ($playAgain !== 'y') {
        break;
    }
}
echo "Thanks for playing!\n";
