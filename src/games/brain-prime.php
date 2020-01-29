<?php

namespace BrainGames\BrainPrime;

use function BrainGames\RunGame\runGame;

function brainPrime()
{
    $isPrime = function ($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    };
    
    $brainPrime = function () use ($isPrime) {
        $minNum = 3;
        $maxNum = 100;
        $num = mt_rand($minNum, $maxNum);
        $question = "{$num}";
        $rightAnswer = $isPrime($num) ? "yes" : "no";
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "Answer \"yes\" if given number is prime. Otherwise answer \"no\"."
        ];
    };
    
    return runGame($brainPrime, $numberOfRepetitions = 3);
}
