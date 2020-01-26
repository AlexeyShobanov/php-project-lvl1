<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\RunGame\runGame;

function run($nameGame)
{
    $gameMap = [
        'brain-even' =>  "Answer \"yes\" if the number is even, otherwise answer \"no\".",
        'brain-calc' => "What is the result of the expression?",
        'brain-gcd' => "Find the greatest common divisor of given numbers.",
        'brain-progression' => "What number is missing in the progression?",
        'brain-prime' => "Answer \"yes\" if given number is prime. Otherwise answer \"no\"."
    ];
    line('Welcome to the Brain Game!');
    line($gameMap[$nameGame]);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    if (runGame($nameGame)) {
        line("Congratulation, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
