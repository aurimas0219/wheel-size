<?php


namespace Nfq\WheelSize;

/**
 * Class RequestFormatter
 *
 * @package Nfq\WheelSize
 */
class EnginePowerFormatter
{
    /**
     * @PhpUnitGen\params("'test1'")
     * @PhpUnitGen\assertNotNull()
     * @PhpUnitGen\assertEquals("'test1 kW'")
     * @param $value
     *
     * @return string
     */
    public static function format($value)
    {
        return $value . ' kW';
    }
}
