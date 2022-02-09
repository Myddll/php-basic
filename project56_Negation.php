<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\isLannisterSoldier;

function isNotLannisterSoldier($color, $shield)
{
    return !(($color == "red" && $shield == NULL) || ($shield == "lion"));
}