<?php

namespace BrainGames\RunGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainCalc\brainCalc;
use function BrainGames\BrainEven\brainEven;
use function BrainGames\BrainGcd\brainGcd;

function runGame($indexGame, $numberOfRepetitions = 3)
{
    
    $callGame = [
        '1' => [
            'task' => "Answer \"yes\" if the number is even, otherwise answer \"no\".",
            'gameFunction' => function () {
                    return brainEven();
            }
        ],
        '2' => [
            'task' => "What is the result of the expression?",
            'gameFunction' => function () {
                    return brainCalc();
            }
        ],
        '3' => [
            'task' => "Find the greatest common divisor of given numbers.",
            'gameFunction' => function () {
                    return brainGcd();
            }
        ]
    ];

    ['task' => $task, 'gameFunction' => $gameFunction] = $callGame[$indexGame];
    line($task);
    for ($i = 0; $i < $numberOfRepetitions; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $gameFunction();
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
