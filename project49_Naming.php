<?php

namespace HexletBasics\DefineFunctions\Naming;

function getFormattedBirthday($day, $month, $year)
{
    return sprintf('%02d-%02d-%d', $day, $month, $year);
}