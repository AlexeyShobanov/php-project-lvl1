<?php

namespace BrainGames\BrainCalc;

use function BrainGames\RunGame\runGame;

function brainCalc()
{
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
        
        $minNum = 0;
        $maxNum = 100;
        $num1 = mt_rand($minNum, $maxNum);
        $num2 = mt_rand($minNum, $maxNum);
        $minIndexForOperator = 0;
        $minIndexForOperator = count($operations) - 1;
        $indexOperator = mt_rand($minIndexForOperator, $minIndexForOperator);
        $operator = array_keys($operations)[$indexOperator];
        $operation = $operations[$operator];
        $rightAnswer = $operation($num1, $num2);
        $question = "{$num1} {$operator} {$num2}";
        
        return [
            'question' => $question,
            'rightAnswer' => $rightAnswer,
            'task' => "What is the result of the expression?"
        ];
    };
    
    return runGame($brainCalc, $numberOfRepetitions = 3);
}
