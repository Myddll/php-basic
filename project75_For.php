<?php

namespace HexletBasics\Loops\ForLoop;

function sumOfSeries($first, $second)
{
    $result = 0;
    for ($i = $first; $i <= $second; $i++)
    {
        $result = $result + $i;
    }
    return $result;
}