<?php

namespace BrainGames\RunGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\CalcGame\calcGame;
use function BrainGames\EvenGame\evenGame;

$callGame = [
    1 => function () {
        return evenGame();
    },
    2 => function () {
        return makeCalc();
    }
];

$runGame = function ($codeGame, $times = 3) use ($callGame) {
    for ($i = 0; $i < $times; $i++) {
        $dataGame = $callGame[$codeGame]();
        line("Question: {$dataGame[guestionStr]}");
        $answer = prompt("Your answer");
        if ($answer !== $dataGame[rightAnswer]) {
            line("\"{$answer}\" is wrong answer ;(. Correct answer was {$dataGame[rightAnswer]}");
            return false;
        }
        line("Correct!");
    }
    return true;
};
