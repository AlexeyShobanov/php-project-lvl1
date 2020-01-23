<?php

namespace BrainGames\CalcGame;

use function BrainGames\General\getRandomNum;

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

$makeCalc = function ($codeOperations, $a, $b) use ($operations) {
    return $operations[$codeOperations]['operation']($a, $b);
};

$calcGame = function () use ($operations) {
    $num1 = getRandomNum();
    $num2 = getRandomNum();
    $codeOperations = getRandomNum(1, 3);
    $questionStr = "{$num1} {$codeOperations} {$num2}";
    $rightAnswer = makeCalc($codeOperations, $num1, $num2);
    return [
      'guestionStr' => $questionStr,
      'rightAnswer' => $rightAnswer
    ];
};
