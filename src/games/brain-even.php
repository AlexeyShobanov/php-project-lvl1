<?php

namespace BrainGames\BrainEven;

use function BrainGames\RunGame\runGame;

function brainEven()
{
    $brainEven = function () {
        $minNum = 0;
        $maxNum = 100;
        $num = mt_rand($minNum, $maxNum);
        $question = "{$num}";
        $rightAnswer = ($num % 2) ? "no" : "yes";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "Answer \"yes\" if the number is even, otherwise answer \"no\"."
        ];
    };
    
    return runGame($brainEven, $numberOfRepetitions = 3);
}
