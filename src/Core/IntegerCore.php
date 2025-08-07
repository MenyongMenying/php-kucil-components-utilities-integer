<?php

namespace Kucil\Components\Utilities\Core;

use Kucil\Components\Utilities\Contracts\IntegerCoreInterface;
use Kucil\Components\Utilities\Enums\IntegerRoundType;

use function ceil;
use function floor;
use function is_int;
use function ltrim;
use function round;

/**
 * @author  MenyongMenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 * 
 * 
 */
abstract class IntegerCore implements IntegerCoreInterface
{
    /**
     * @see IntegerUtilsTest::testIsInteger()
     * 
     * 
     */
    public static function isInteger(mixed $integer): null|bool
    {
        return is_int($integer);
    }

    /**
     * @see IntegerUtilsTest::testIsPositiveNumber()
     * 
     * 
     */
    public static function isPositiveNumber(int $integer): null|bool
    {
        return $integer > 0;
    }

    /**
     * @see IntegerUtilsTest::testIsEvenNumber()
     * 
     * 
     */
    public static function isEvenNumber(int $integer): null|bool
    {
        return $integer % 2 === 0;
    }
    
    /** 
     * @see IntegerUtilsTest::testLength()
     * 
     * 
     */
    public static function length(int $integer): null|int
    {
        $int = self::toString($integer);
        $int = ltrim($int, '-');
        $int = strlen($int);
        return $int;
    }

    /**
     * @see IntegerUtilsTest::testRoundNearest()
     * @see IntegerUtilsTest::testRoundUp()
     * @see IntegerUtilsTest::testRoundDown()
     * 
     * 
     */
    public static function round(int $integer, int $digit, IntegerRoundType $type = IntegerRoundType::NEAREST): null|int
    {
        $up = IntegerRoundType::UP;
        $down = IntegerRoundType::DOWN;
        $nearest = IntegerRoundType::NEAREST;
        if ($type === $nearest) {
            return self::roundNearest($integer, $digit);
        }
        if ($type === $up) {
            return self::roundUp($integer, $digit);
        }
        if ($type === $down) {
            return self::roundDown($integer, $digit);
        }
        return null;
    }

    /**
     * @see IntegerUtilsTest::testRoundNearest()
     * 
     * 
     */
    public static function roundNearest(int $integer, int $digit = 1): null|int
    {
        if ($digit === 0 || $digit > self::length($integer)) {
            return null;
        }
        $factor = 10 ** $digit;
        $result = $integer / $factor;
        $result = round($result);
        $result = $result * $factor;
        return $result;
    }

    /**
     * @see IntegerUtilsTest::testRoundUp()
     * 
     * 
     */
    public static function roundUp(int $integer, int $digit = 1): null|int
    {
        if ($digit === 0 || $digit > self::length($integer)) {
            return null;
        }
        $factor = 10 ** $digit;
        $result = $integer / $factor;
        $result = ceil($result);
        $result = $result * $factor;
        return $result;
    }

    /**
     * @see IntegerUtilsTest::testRoundDown()
     * 
     * 
     */
    public static function roundDown(int $integer, int $digit = 1): null|int
    {
        if ($digit === 0 || $digit > self::length($integer)) {
            return null;
        }
        $factor = 10 ** $digit;
        $result = $integer / $factor;
        $result = floor($result);
        $result = $result * $factor;
        return $result;
    }

    /**
     * @see IntegerUtilsTest::testToBoolean()
     * 
     * 
     */
    public static function toBoolean(int $integer): null|bool
    {
        if ($integer === 1) {
            return true;
        }
        if ($integer === 0) {
            return false;
        }
        return null;
    }

    /**
     * @see IntegerUtilsTest::testToFloat()
     * 
     * 
     */
    public static function toFloat(int $integer): null|float
    {
        return (float) $integer;
    }

    /**
     * @see IntegerUtilsTest::testToString()
     * 
     * 
     */
    public static function toString(int $integer): null|string
    {
        return (string) $integer;
    }
}
