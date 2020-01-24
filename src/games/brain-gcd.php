<?php

namespace BrainGames\BrainGcd;

use function BrainGames\General\getRandomNum;

function findGcd($num1, $num2)
{
    $iter = function ($a, $b) use (&$iter) {
        $remainder = $b % $a;
        if ($remainder === 0) {
            return $a;
        }
        return $iter($remainder, $a);
    };

    return $iter($num1, $num2);
}

function brainGcd()
{
    $num1 = getRandomNum(1, 100);
    $num2 = getRandomNum(1, 1000);
    if ($num1 > $num2) {
        [$num1, $num2] = [$num2, $num1];
    }
    $question = "{$num1} {$num2}";
    $rightAnswer = findGcd($num1, $num2);
    return [
        'question' => $question,
        'rightAnswer' => $rightAnswer
    ];
}
