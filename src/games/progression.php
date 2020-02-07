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

function runGameProgression()
{
    define('MIN_NUM', 1);
    define('MAX_NUM', 100);
    define('PROGRESSION_SIZE', 10);
    define('TASK', "What number is missing in the progression?");

    $runGameProgression = function () {
        $firstNumberOfProgression = mt_rand(MIN_NUM, MAX_NUM);
        $incremen = mt_rand(MIN_NUM, MAX_NUM);
        $missingElementIndex = mt_rand(0, PROGRESSION_SIZE - 1);
        $progression = makeProgression($firstNumberOfProgression, $incremen, PROGRESSION_SIZE);
        $rightAnswer = strval($progression[$missingElementIndex]);
        $progressionText = implode(' ', $progression);
        $question = str_replace($rightAnswer, "...", $progressionText);
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };

    return runGame($runGameProgression, TASK);
}
