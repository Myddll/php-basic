<?php

namespace HexletBasics\Conditionals\IfStatement;

function getSentenceTone($string)
{
    $checkString = strtoupper($string);
    if ($checkString === $string)
    {
        return "scream";
    }
    return "general";
}