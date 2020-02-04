<?php

namespace Alshad\BrainGames\Games\Even;

use function Alshad\BrainGames\Run\Game\runGame;

function runEven()
{
    define('MIN_NUM', 0);
    define('MAX_NUM', 100);
    define('TASK', "Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $runEven = function () {
        $num = mt_rand(MIN_NUM, MAX_NUM);
        $question = "{$num}";
        $rightAnswer = ($num % 2) ? "no" : "yes";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($runEven, TASK);
}
