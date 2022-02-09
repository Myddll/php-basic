<?php

use function HexletBasics\Functions\getParentFor;

$mother = getParentFor('Joffrey Baratheon');
$grandfather = getParentFor($mother, "father");
echo $grandfather;