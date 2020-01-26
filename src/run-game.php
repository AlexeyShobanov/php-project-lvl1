<?php

namespace BrainGames\RunGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainCalc\brainCalc;
use function BrainGames\BrainEven\brainEven;
use function BrainGames\BrainGcd\brainGcd;
use function BrainGames\BrainProgression\brainProgression;


function runGame($nameGame, $numberOfRepetitions = 3) {
    for ($i = 0; $i < $numberOfRepetitions; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $nameGame();
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


/* function runGame($indexGame, $numberOfRepetitions = 3)
{
    
    $callGame = [
        '1' => [
            'task' => "Answer \"yes\" if the number is even, otherwise answer \"no\".",
            'gameFunction' => 'BrainGames\BrainEven\brainEven'
        ],
        '2' => [
            'task' => "What is the result of the expression?",
            'gameFunction' => 'BrainGames\BrainEven\brainEven'
        ],
        '3' => [
            'task' => "Find the greatest common divisor of given numbers.",
            'gameFunction' => 'BrainGames\BrainGcd\brainGcd'
        ],
        '4' => [
            'task' => "What number is missing in the progression?",
            'gameFunction' => 'BrainGames\BrainProgression\brainProgression'
        ]
    ];

    if (intval($indexGame) > count($callGame)) {
        line("You are mistaken. This number is not in the list of games.");
        return false;
    }

    ['task' => $task, 'gameFunction' => $gameFunction] = $callGame[$indexGame];
    line($gameFunction);
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
} */
