<?php

namespace HexletBasics\Loops\ReturnFromLoop;

function hasChar($string, $symbol)
{
    $i = 0;
    while($i < strlen($string))
    {
        if ($string[$i] === $symbol)
        {
            return true;
        }
        $i++;
    }
    return false;
}