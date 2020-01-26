<?php

namespace BrainGames\RunGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainCalc\brainCalc;
use function BrainGames\BrainEven\brainEven;
use function BrainGames\BrainGcd\brainGcd;
use function BrainGames\BrainPrime\brainPrime;
use function BrainGames\BrainProgression\brainProgression;

function runGame($nameGame, $numberOfRepetitions = 3)
{
    $callGame = [
        'brain-even' => 'BrainGames\BrainEven\brainEven',
        'brain-calc' => 'BrainGames\BrainCalc\brainCalc',
        'brain-gcd' => 'BrainGames\BrainGcd\brainGcd',
        'brain-progression' => 'BrainGames\BrainProgression\brainProgression',
        'brain-prime' => 'BrainGames\BrainPrime\brainPrime'
    ];

    for ($i = 0; $i < $numberOfRepetitions; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $callGame[$nameGame]();
        line("Question: {$question}");
        $answer = prompt("Your answer");
        if ($answer !== "{$rightAnswer}") {
            line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{$rightAnswer}\"");
            return false;
        }
        line("Correct!");
    }
    return true;
}
