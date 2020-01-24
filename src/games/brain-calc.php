<?php

namespace BrainGames\BrainCalc;

use function BrainGames\General\getRandomNum;

function brainCalc()
{
    $operations = [
        0 => [
            'symbol' => '+',
            'operation' => function ($a, $b) {
                return $a + $b;
            }
        ],
        1 => [
            'symbol' => '-',
            'operation' => function ($a, $b) {
                return $a - $b;
            }
        ],
        2 => [
            'symbol' => '*',
            'operation' => function ($a, $b) {
                return $a * $b;
            }
        ]
     ];

    $num1 = getRandomNum();
    $num2 = getRandomNum();
    $codeOperations = getRandomNum(0, 2);
    ['symbol' => $symbol, 'operation' => $operation] = $operations[$codeOperations];
    $rightAnswer = $operation($num1, $num2);
    $question = "{$num1} {$symbol} {$num2}";
    return [
      'question' => $question,
      'rightAnswer' => $rightAnswer
    ];
}
