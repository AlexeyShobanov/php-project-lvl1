<?php

namespace BrainGames\General;

function getRandomNum($min = 0, $max = 100)
{
    return mt_rand($min, $max);
}
