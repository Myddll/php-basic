<?php

namespace HexletBasics\Loops\ReverseString;

function mysubstr($str, $int)
{
    $i = 0;
    $result ='';
    while ($i < $int)
    {
        $currentChar = $str[$i];
        $result = "{$result}{$currentChar}";
        $i++;
    }
    return $result;
}