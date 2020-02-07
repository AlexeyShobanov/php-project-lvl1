<?php

namespace Alshad\BrainGames\Games\Gcd;

use function Alshad\BrainGames\Run\Game\runGame;

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
    

function runGameGcd()
{
    define('MIN_NUM', 1);
    define('MAX_FOR_FIRST_NUM', 100);
    define('MAX_FOR_SECOND_NUM', 1000);
    define('TASK', "Find the greatest common divisor of given numbers.");

    $runGameGcd = function () {
        $num1 = mt_rand(MIN_NUM, MAX_FOR_FIRST_NUM);
        $num2 = mt_rand(MIN_NUM, MAX_FOR_SECOND_NUM);
        if ($num1 > $num2) {
            [$num1, $num2] = [$num2, $num1];
        }
        $question = "{$num1} {$num2}";
        $rightAnswer = strval(findGcd($num1, $num2));
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($runGameGcd, TASK);
}
