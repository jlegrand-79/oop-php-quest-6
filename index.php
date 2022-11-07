<?php

require_once 'Speedometer.php';

echo "distance en miles : " . $milesDistance = 0.62137119223733;
echo nl2br(PHP_EOL);
echo "distance convertie en km : " . Speedometer::milesToKm($milesDistance);
echo nl2br(PHP_EOL);
echo "distance en km : " . $kmDistance = 1.609344;
echo nl2br(PHP_EOL);
echo "distance convertie en miles : " . Speedometer::kmToMiles($kmDistance);
echo nl2br(PHP_EOL);
echo "distance en km : " . $kmDistance = 10;
echo nl2br(PHP_EOL);
echo "distance convertie en miles : " . Speedometer::kmToMiles($kmDistance);
