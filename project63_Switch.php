<?php

namespace HexletBasics\Conditionals\SwitchStatement;

function getNumberExplanation($int)
{
    switch ($int)
    {
        case 666:
            return "devil number";
        case 42:
            return "answer for everything";
        case 7:
            return "prime number";
        default:
            return NULL;
    }
}