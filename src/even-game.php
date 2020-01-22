<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function isEven($num)
{
    return $num % 2 ? false : true;
}

function getRandomNum($min = 0, $max = 100)
{
    return mt_rand($min, $max);
}

function evenGame($times = 3)
{
    for ($i = 0; $i < $times; $i++) {
        $num = getRandomNum();
        line("Question: {$num}");
        $answer = prompt("Your answer");
        $correctAnswer = isEven($num) ? "yes" : "no";
        if ($answer !== $correctAnswer) {
            line("\"{$answer}\" is wrong answer ;(. Correct answer was {$correctAnswer}");
            return false;
        }
        line("Correct!");
    }
    return true;
}
