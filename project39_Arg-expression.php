<?php

use function HexletBasics\Functions\calculateDistanceBetweenTowns;

$from = 'The Twins';
$to = 'The Eyrie';

$distance = calculateDistanceBetweenTowns("{$from}-{$to}");
echo $distance;