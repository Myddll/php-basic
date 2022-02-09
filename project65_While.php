<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    $i = $firstNumber;
        while ($i > 0)
        {
            print_r("{$i}\n");
            $i--;
        }
    print_r("finished!");
}