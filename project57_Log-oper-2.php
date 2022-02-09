<?php

namespace HexletBasics\Logic\LogicalOperators2;

function isNeutralSoldier($armor, $shield)
{
    return ($armor !== "red" && $shield == "black");
}