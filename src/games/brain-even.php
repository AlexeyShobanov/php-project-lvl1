<?php

namespace Php\Project\Lvl1\Games\Brain\Even;

use function Php\Project\Lvl1\Run\Game\runGame;

function runBrainEven()
{
    define('MIN_NUM', 0);
    define('MAX_NUM', 100);
    define('TASK', "Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $brainEven = function () {
        $num = mt_rand(MIN_NUM, MAX_NUM);
        $question = "{$num}";
        $rightAnswer = ($num % 2) ? "no" : "yes";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($brainEven, TASK);
}
