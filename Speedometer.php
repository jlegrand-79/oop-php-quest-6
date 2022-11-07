<?php
class Speedometer
{

    public const MILES_TO_KM_COEF = 1.609344;


    public static function milesToKm(float $milesDistance): ?float
    {
        $kmDistance = $milesDistance * self::MILES_TO_KM_COEF;
        return round($kmDistance, 2, PHP_ROUND_HALF_UP);
    }

    public static function kmToMiles(float $kmDistance): ?float
    {
        $milesDistance = $kmDistance / self::MILES_TO_KM_COEF;
        return round($milesDistance, 2, PHP_ROUND_HALF_UP);
    }
}
