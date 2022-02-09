<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

function countChars($str, $char)
{
    $strLower = mb_strtolower($str);
    $charLower = mb_strtolower($char);
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($strLower[$i] === $charLower) {
            $count++;
        }
        $i++;
    }

    return $count;
}