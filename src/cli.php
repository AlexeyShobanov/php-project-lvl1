<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\EvenGame\evenGame;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    if (evenGame()) {
        line("Congratulation, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
