<?php

namespace HexletBasics\Loops\SyntaxSugar;

function countChars($string, $symbol)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($string))
    {
        if($symbol===$string[$i])
        {
            $count++;
        }
        $i++;
    }
    return $count;
}