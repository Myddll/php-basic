<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

function whoIsThisHouseToStarks($fam)
{
    if($fam == "Karstark" || $fam == "Tully")
    {
        return "friend";
    }
    elseif($fam == "Lannister" || $fam == "Frey")
    {
        return "enemy";
    }
    else
    {
        return "neutral";
    }
}