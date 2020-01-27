<?php

namespace BrainGames\BrainProgression;

use function BrainGames\General\getRandomNum;

function makeProgression($num, $incremen)
{
    $progression[] = $num;
    for ($i = 1; $i < 10; $i++) {
        $progression[] = $progression[$i - 1] + $incremen;
    }
    return $progression;
}

function brainProgression()
{
    $num = getRandomNum(1, 100);
    $incremen = getRandomNum(1, 100);
    $missingIndex = getRandomNum(0, 9);
    $progression = makeProgression($num, $incremen);
    $rightAnswer = $progression[$missingIndex];
    $progressionStr = implode(' ', $progression);
    $question = str_replace("{$rightAnswer}", "...", $progressionStr);

    return [
        'question' => $question,
        'rightAnswer' => $rightAnswer
    ];
}
