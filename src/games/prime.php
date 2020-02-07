<?php

namespace Alshad\BrainGames\Games\Prime;

use function Alshad\BrainGames\Run\Game\runGame;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
    
function runGamePrime()
{
    define('MIN_NUM', 1);
    define('MAX_NUM', 100);
    define('TASK', "Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

    $runGamePrime = function () {
        $num = mt_rand(MIN_NUM, MAX_NUM);
        $question = "{$num}";
        $rightAnswer = isPrime($num) ? "yes" : "no";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($runGamePrime, TASK);
}
