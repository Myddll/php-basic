<?php

namespace HexletBasics\Logic\TernaryOperator;

function convertText($string)
{
    $check = ucfirst($string);
    if($string == $check)
    {
        return $string;
    }
    else
    {
        return strrev($string);
    }
}