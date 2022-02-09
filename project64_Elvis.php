<?php

namespace HexletBasics\Conditionals\Elvis;

function generateAmount($countGoods, $price)
{
    if($countGoods == 0)
    {
        return $price*3;
    }
    else
    {
        return $countGoods;
    }
}