<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\RunGame\runGame;

$GLOBALS['gameMap'] = [
    'bra1n-even' =>  "Answer \"yes\" if the number is even, otherwise answer \"no\".",
    'brain-calc' => "What is the result of the expression?",
    'brain-gcd' => "Find the greatest common divisor of given numbers.",
    'brain-progression' => "What number is missing in the progression?",
    'brain-prime' => "Answer \"yes\" if given number is prime. Otherwise answer \"no\".",
    'brain-games' => "Choose the game you want to play."
];


function run($nameGame)
{
    $taskDescription = $GLOBALS['gameMap'][$nameGame];
    line('Welcome to the Brain Game!');
    line($taskDescription);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    if ($nameGame === 'brainGames') {
        $nameGame = runGameSelection();
    }

    if (runGame($nameGame)) {
        line("Congratulation, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}

function runGameSelection()
{
    
    $listGames = array_keys($GLOBALS[$gameMap]);
    //$listGames = array_keys($gameMap);
    for ($i = 0; $i < length($listGames) - 1; $i++) {
        line("{($i + 1)}. {$listGames[$i]}");
    };
    $gameNumber = prompt('Enter game number');
    return $listGames[$gameNumber - 1];
}


/* function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Choose the game you want to play:');
    line('1. Brain-Even');
    line('2. Brain-Calc');
    line('3. Brain-GCD');
    line('4. Brain-Progression');
    $gameNumber = prompt('Enter game number');
    if (runGame($gameNumber)) {
        line("Congratulation, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}  */
