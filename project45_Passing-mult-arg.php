<?php

namespace HexletBasics\DefineFunctions\Arguments;

function printSeq($roadType, $repeat)
{
    print_r(str_repeat($roadType, $repeat));
}