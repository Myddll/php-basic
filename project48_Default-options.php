<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use function HexletBasics\Functions\getParentFor;

function getCustomParentFor($child, $parent = 'father')
{
    return getParentFor($child, $parent);
}