<?php

use function HexletBasics\Functions\calculateDistance;

$firstDistance = calculateDistance("Winterfell", "The Twins");
$secondDistance = calculateDistance("The Twins", "The Eyrie");
$result = $firstDistance + $secondDistance;

print_r($result);