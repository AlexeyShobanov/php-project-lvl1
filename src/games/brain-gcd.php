<?php

namespace BrainGames\BrainGcd;

use function BrainGames\RunGame\runGame;

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
    $brainGcd = function () {
        $minNum = 0;
        $maxNumForBegin = 100;
        $maxNumForEnd = 1000;
        $num1 = mt_rand($minNum, $maxNumForBegin);
        $num2 = mt_rand($minNum, $maxNumForEnd);
        if ($num1 > $num2) {
            [$num1, $num2] = [$num2, $num1];
        }
        $question = "{$num1} {$num2}";
        $rightAnswer = findGcd($num1, $num2);
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "Find the greatest common divisor of given numbers."
        ];
    };
    
    return runGame($brainGcd);
}
