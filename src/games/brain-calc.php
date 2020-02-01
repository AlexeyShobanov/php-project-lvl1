<?php

namespace Php\Project\Lvl1\Games\Brain\Calc;

use function Php\Project\Lvl1\Run\Game\runGame;

function runBrainCalc()
{
    define('MIN_NUM', 0);
    define('MAX_NUM', 100);
    define('TASK', "What is the result of the expression?");

    $brainCalc = function () {
        $operations = [
            '+' => function ($a, $b) {
                return $a + $b;
            },
            '-' => function ($a, $b) {
                return $a - $b;
            },
            '*' => function ($a, $b) {
                return $a * $b;
            }
        ];
        $num1 = mt_rand(MIN_NUM, MAX_NUM);
        $num2 = mt_rand(MIN_NUM, MAX_NUM);
        $maxIndexForOperator = count($operations) - 1;
        $indexOperator = mt_rand(0, $maxIndexForOperator);
        $operator = array_keys($operations)[$indexOperator];
        $operation = $operations[$operator];
        $rightAnswer = "{$operation($num1, $num2)}";
        $question = "{$num1} {$operator} {$num2}";
        
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($brainCalc, TASK);
}
