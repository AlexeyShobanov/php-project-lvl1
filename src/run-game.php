<?php

namespace Alshad\BrainGames\Run\Game;

use function cli\line;
use function cli\prompt;

define('REPETITION_COUNT', 3);

function runGame($game, $task)
{
    line('Welcome to the Brain Game!');
    line($task);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < REPETITION_COUNT; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $game();
        line("Question: {$question}");
        $answer = prompt("Your answer");
        if ($answer !== $rightAnswer) {
            line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{$rightAnswer}\"");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulation, {$name}!");
    return;
}
