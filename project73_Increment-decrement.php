<?php

namespace HexletBasics\Loops\Mutators;

function filterString($string, $symbol)
{
    $i = 0;
    $newStr= '';
    while ($i < strlen($string))
    {
        if ($string[$i] !== $symbol)
        {
            $newStr="{$newStr}{$string[$i]}";
        }
        $i++;
    }
    return $newStr;
}