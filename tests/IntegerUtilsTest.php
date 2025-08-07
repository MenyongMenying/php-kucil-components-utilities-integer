<?php

use Kucil\Components\Utilities\IntegerUtils;
use PHPUnit\Framework\TestCase;

use stdClass;

class IntegerUtilsTest extends TestCase
{
    public function testIsInteger(): void
    {
        $int = new IntegerUtils;
        self::assertTrue($int->isInteger(1), 'test-1');
        self::assertFalse($int->isInteger(1.1), 'test-2');
        self::assertFalse($int->isInteger(true), 'test-3');
        self::assertFalse($int->isInteger('String'), 'test-4');
        self::assertFalse($int->isInteger([]), 'test-5');
        self::assertFalse($int->isInteger(new stdClass), 'test-6');
    }

    public function testIsPositiveNumber(): void
    {
        $int = new IntegerUtils;
        self::assertTrue($int->isPositiveNumber(1), 'test-1');
        self::assertFalse($int->isPositiveNumber(0), 'test-2');
        self::assertFalse($int->isPositiveNumber(-1), 'test-3');
    }

    public function testIsEvenNumber(): void
    {
        $int = new IntegerUtils;
        self::assertTrue($int->isEvenNumber(2), 'test-1');
        self::assertTrue($int->isEvenNumber(0), 'test-2');
        self::assertFalse($int->isEvenNumber(1), 'test-3');
    }

    public function testLength(): void
    {
        $int = new IntegerUtils;
        self::assertSame(1, $int->length(1), 'test-1');
        self::assertSame(3, $int->length(100), 'test-2');
        self::assertSame(3, $int->length(-100), 'test-3');
    }

    public function testRoundNearest(): void
    {
        $int = new IntegerUtils;
        self::assertSame(0, $int->roundNearest(1, 1), 'test-1');
        self::assertSame(100, $int->roundNearest(101, 1), 'test-2');
        self::assertSame(200, $int->roundNearest(150, 2), 'test-3');
    }

    public function testRoundUp(): void
    {
        $int = new IntegerUtils;
        self::assertSame(10, $int->roundUp(1, 1), 'test-1');
        self::assertSame(110, $int->roundUp(101, 1), 'test-2');
        self::assertSame(200, $int->roundUp(101, 2), 'test-3');
    }

    public function testRoundDown(): void
    {
        $int = new IntegerUtils;
        self::assertSame(0, $int->roundDown(1, 1), 'test-1');
        self::assertSame(100, $int->roundDown(109, 1), 'test-2');
        self::assertSame(100, $int->roundDown(192, 2), 'test-3');
    }

    public function testToBoolean(): void
    {
        $int = new IntegerUtils;
        self::assertTrue($int->toBoolean(1), 'test-1');
        self::assertFalse($int->toBoolean(0), 'test-2');
        self::assertNull($int->toBoolean(10), 'test-3');
    }

    public function testToFloat(): void
    {
        $int = new IntegerUtils;
        self::assertSame(1.0, $int->toFloat(1), 'test-1');
        self::assertSame(10.0, $int->toFloat(10), 'test-2');
        self::assertSame(100.0, $int->toFloat(100), 'test-3');
    }

    public function testToString(): void
    {
        $int = new IntegerUtils;
        self::assertSame('1', $int->toString(1), 'test-1');
        self::assertSame('100', $int->toString(100), 'test-2');
        self::assertSame('-100', $int->toString(-100), 'test-3');
    }
}