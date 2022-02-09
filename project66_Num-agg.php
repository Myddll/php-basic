<?php

namespace HexletBasics\Loops\AgregationNumber;

function multiplyNumberFromRange($start, $finish)
{
    $i = $start;
    $result = 1;

    while ($i <= $finish) {
        $result = $result * $i;
        $i = $i++;
    }

    return $result;
}