<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use function HexletBasics\Functions\getParentFor;

function getParentNamesTotalLength($nameChild)
{
    $mother = getParentFor($nameChild, 'mother');
    $father = getParentFor($nameChild, 'father');
    return strlen($mother) + strlen($father);
}