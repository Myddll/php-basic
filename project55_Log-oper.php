<?php

namespace HexletBasics\Logic\LogicalOperators;

function isLannisterSoldier($color, $shield)
{
    return ($color == "red" && $shield == NULL) || $shield == "lion";
}