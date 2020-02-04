<?php

namespace Alshad\BrainGames\Games\Progression;

use function Alshad\BrainGames\Run\Game\runGame;

function makeProgression($firstNumberGfProgression, $incremen, $lengthOfProgression)
{
    $progression = [];
    for ($i = 0; $i < $lengthOfProgression; $i++) {
        $progression[] = $firstNumberGfProgression + $i * $incremen;
    }
    return $progression;
}

function runProgression()
{
    define('MIN_NUM', 1);
    define('MAX_NUM', 100);
    define('SIZE_PROGRESSION', 10);
    define('TASK', "What number is missing in the progression?");

    $runProgression = function () {
        $firstNumberGfProgression = mt_rand(MIN_NUM, MAX_NUM);
        $incremen = mt_rand(MIN_NUM, MAX_NUM);
        $missingIndex = mt_rand(0, SIZE_PROGRESSION - 1);
        $progression = makeProgression($firstNumberGfProgression, $incremen, SIZE_PROGRESSION);
        $rightAnswer = "{$progression[$missingIndex]}";
        $progressionText = implode(' ', $progression);
        $question = str_replace($rightAnswer, "...", $progressionText);
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };

    return runGame($runProgression, TASK);
}
