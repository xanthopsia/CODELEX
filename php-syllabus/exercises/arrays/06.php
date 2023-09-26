<?php

function isGuessCorrect(string $guess, string $randomWord): bool
{
    return strpos($randomWord, $guess) !== false;
}

function displayGameState(array $guessingWord, array $misses, int $guessCount): void
{
    echo 'Misses: ' . implode(', ', $misses) . PHP_EOL;
    echo 'Guesses left: ' . $guessCount . PHP_EOL;
    echo 'Word: ' . implode(' ', $guessingWord) . PHP_EOL;
}

function getRandomWord(array $wordList): string
{
    return $wordList[array_rand($wordList)];
}

function playHangman(array $wordList, int $maxGuesses): void
{
    $randomWord = getRandomWord($wordList);
    $guessingWord = str_split(str_repeat('_', strlen($randomWord)));
    $misses = [];
    $guessCount = $maxGuesses;

    while (implode('', $guessingWord) !== $randomWord && $guessCount > 0) {
        displayGameState($guessingWord, $misses, $guessCount);
        $guess = strtolower(readline('Your guess: '));

        if (strlen($guess) === 1 && ctype_alpha($guess) && !in_array($guess, $misses)) {
            if (isGuessCorrect($guess, $randomWord)) {
                for ($i = 0; $i < strlen($randomWord); $i++) {
                    if ($randomWord[$i] === $guess) {
                        $guessingWord[$i] = $guess;
                    }
                }
            } else {
                $misses[] = $guess;
                $guessCount--;
            }
        } else if (strlen($guess) === strlen($randomWord) && !in_array($guess, $misses)) {
            if (strtolower($guess) === $randomWord) {
                $guessingWord = str_split($randomWord);
            } else {
                $misses[] = $guess;
                $guessCount--;
            }
        } else {
            echo 'Invalid guess. Please enter a single letter or a valid word you have not guessed before.' . PHP_EOL;
        }
    }

    if (implode('', $guessingWord) === $randomWord) {
        echo "Congratulations! You guessed the word: $randomWord" . PHP_EOL;
    } else {
        echo "Out of guesses. The word was: $randomWord" . PHP_EOL;
    }
}

$wordList = [
    'apple',
    'banana',
    'chocolate',
    'elephant',
    'guitar',
    'happiness',
    'jazz',
    'kangaroo',
    'lighthouse',
    'moonlight',
];

$maxGuesses = 5;

playHangman($wordList, $maxGuesses);
