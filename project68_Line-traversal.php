<?php

namespace HexletBasics\Loops\IterationOverString;

function printReversedNameBySymbol($string)
{
    $stringReverse = strrev($string);
    $i = 0;
    while ($i < strlen($stringReverse))
    {
        print_r("$stringReverse[$i]\n");
        $i++;
    }
}