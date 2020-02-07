<?php

namespace Alshad\BrainGames\Games\Calc;

use function Alshad\BrainGames\Run\Game\runGame;

function runGameCalc()
{
    define('MIN_NUM', 0);
    define('MAX_NUM', 100);
    define('TASK', "What is the result of the expression?");

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

    $runGameCalc = function () use ($operations) {
        $num1 = mt_rand(MIN_NUM, MAX_NUM);
        $num2 = mt_rand(MIN_NUM, MAX_NUM);
        $indexOperator = mt_rand(0, count($operations) - 1);
        $operator = array_keys($operations)[$indexOperator];
        $operation = $operations[$operator];
        $rightAnswer = strval($operation($num1, $num2));
        $question = "{$num1} {$operator} {$num2}";
        
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer
        ];
    };
    
    return runGame($runGameCalc, TASK);
}
