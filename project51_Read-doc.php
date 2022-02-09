<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

function getAge($num)
{
    $ret = round ( $num, 0, PHP_ROUND_HALF_DOWN);
    return $ret;
}