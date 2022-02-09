<?php

namespace HexletBasics\DefineFunctions\Environment;

function getAgeDifference($before, $after)
{
    $actual = $after - $before;
    return "The age difference is {$actual}";
}