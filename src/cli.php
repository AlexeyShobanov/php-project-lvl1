<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\RunGame\runGame;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Choose the game you want to play:');
    line('1. EvenGame');
    line('2. CalcGame');
    $gameNumber = prompt('Enter game number');
    
    if (runGame($gameNumber)) {
        line("Congratulation, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
