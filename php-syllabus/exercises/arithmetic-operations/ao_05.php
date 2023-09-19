<?php
$randomNumber = rand(1, 100);

echo "I'm thinking of a number between 1 and 100. Try to guess it.\n";

$guess = (int)readline("> ");

    if ($guess === $randomNumber) {
        echo "You guessed it! What are the odds?!?\n";
    } elseif ($guess < $randomNumber) {
        echo "Sorry, you are too low. I was thinking of $randomNumber.\n";
    } else {
        echo "Sorry, you are too high. I was thinking of $randomNumber.\n";
}

