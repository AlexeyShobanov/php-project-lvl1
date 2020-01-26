<?php

namespace BrainGames\BrainPrime;

use function BrainGames\General\getRandomNum;

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
    $num = getRandomNum();
    $question = "{$num}";
    $rightAnswer = isPrime($num) ? "yes" : "no";
    return [
        'question' => $question,
        'rightAnswer' => $rightAnswer
    ];
}
