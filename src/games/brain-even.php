<?php

namespace BrainGames\BrainEven;

use function BrainGames\General\getRandomNum;

function isEven($num)
{
    return $num % 2 ? false : true;
}

function brainEven()
{
    $num = getRandomNum();
    $question = "{$num}";
    $rightAnswer = isEven($num) ? "yes" : "no";
    return [
        'question' => $question,
        'rightAnswer' => $rightAnswer
    ];
}
