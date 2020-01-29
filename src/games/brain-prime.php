<?php

namespace BrainGames\BrainPrime;

use function BrainGames\RunGame\runGame;

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
    
function brainPrime()
{
    $brainPrime = function () {
        $minNum = 3;
        $maxNum = 100;
        $num = mt_rand($minNum, $maxNum);
        $question = "{$num}";
        $rightAnswer = isPrime($num) ? "yes" : "no";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "Answer \"yes\" if given number is prime. Otherwise answer \"no\"."
        ];
    };
    
    return runGame($brainPrime);
}
