<?php

namespace BrainGames\BrainProgression;

use function BrainGames\RunGame\runGame;

function brainProgression()
{
    $makeProgression = function ($num, $incremen, $lengthOfProgression) {
        $progression = [];
        for ($i = 0; $i < $lengthOfProgression; $i++) {
            $progression[] = $num + $i * $incremen;
        }
        return $progression;
    };

    $brainProgression = function () use ($makeProgression) {
        $minNum = 1;
        $maxNum = 100;
        $num = mt_rand($minNum, $maxNum);
        $incremen = mt_rand($minNum, $maxNum);
        $lengthOfProgression = 10;
        $missingIndex = mt_rand(0, $lengthOfProgression - 1);
        $progression = $makeProgression($num, $incremen, $lengthOfProgression);
        $rightAnswer = $progression[$missingIndex];
        $progressionStr = implode(' ', $progression);
        $question = str_replace("{$rightAnswer}", "...", $progressionStr);
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "What number is missing in the progression?"
        ];
    };

    return runGame($brainProgression, $numberOfRepetitions = 3);
}
