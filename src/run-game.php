<?php

namespace BrainGames\RunGame;

use function cli\line;
use function cli\prompt;

function welcom($task)
{
    
    line('Welcome to the Brain Game!');
    line($task);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}


function runGame($game, $numberOfRepetitions = 3)
{
    ['task' => $task] = $game();

    $name = welcom($task);

    for ($i = 0; $i < $numberOfRepetitions; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $game();
        line("Question: {$question}");
        $answer = prompt("Your answer");
        if ($answer !== "{$rightAnswer}") {
            line("\"{$answer}\" is wrong answer ;(. Correct answer was \"{$rightAnswer}\"");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulation, {$name}!");
    return;
}
