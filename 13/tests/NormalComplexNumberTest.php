<?php


namespace tests;

require_once __DIR__ . '/../classes/ComplexNumber.php';

use classes\ComplexNumber;
use PHPUnit\Framework\TestCase;
class NormalComplexNumberTest extends TestCase
{
    public function ComplexNumberProvider(): array
    {
        $x = new ComplexNumber(5, 2);
        $y = new ComplexNumber(2, -5);
        return [
            [$x, $y]
        ];
    }
    public function testAdd1()
    {
        $x = new ComplexNumber(1, 3);
        $y = new ComplexNumber(4, -5);
        $res = new ComplexNumber(5, -2);
        $this->assertEquals($res, ComplexNumber::add($x, $y));
    }

    /**
     * @dataProvider ComplexNumberProvider
     */
    public function testAdd2($x, $y)
    {
        $this->assertEquals(new ComplexNumber(7, -3), ComplexNumber::add($x, $y));
    }

    public function testSub1()
    {
        $x = new ComplexNumber(- 2, 1);
        $y = new ComplexNumber(sqrt(3), 5);
        $res = new ComplexNumber(- 2 - sqrt(3), - 4);
        $this->assertEquals($res, ComplexNumber::sub($x, $y));
    }

    public function testSub2()
    {
        $x = new ComplexNumber(sqrt(3), 5);
        $y = new ComplexNumber(- 2, 1);
        $res = new ComplexNumber(2 + sqrt(3), 4);
        $this->assertEquals($res, ComplexNumber::sub($x, $y));
    }

    /**
     * @dataProvider ComplexNumberProvider
     */
    public function testSub3($x, $y)
    {
        $this->assertEquals(new ComplexNumber(3, 7), ComplexNumber::sub($x, $y));
    }

    public function testMult()
    {
        $x = new ComplexNumber(1, -1);
        $y = new ComplexNumber(3, 6);
        $res = new ComplexNumber(9, 3);
        $this->assertEquals($res, ComplexNumber::mult($x, $y));
    }

    /**
     * @dataProvider ComplexNumberProvider
     */
    public function testMult2($x, $y)
    {
        $this->assertEquals(new ComplexNumber(20, -21), ComplexNumber::mult($x, $y));
    }


    public function testDiv()
    {
        $x = new ComplexNumber(13, 1);
        $y = new ComplexNumber(7, -6);
        $res = new ComplexNumber(1, 1);
        $this->assertEquals($res, ComplexNumber::div($x, $y));
    }
    /**
     * @dataProvider ComplexNumberProvider
     */
    public function testDiv2($x, $y)
    {
        $this->assertEquals(new ComplexNumber(0, 1), ComplexNumber::div($x, $y));
    }


    public function testAbs1()
    {
        $x = new ComplexNumber(3, 4);
        $this->assertEquals(5, ComplexNumber::abs($x));
    }

    /**
     * @dataProvider ComplexNumberProvider
     */
    public function testAbs2($x, $y)
    {
        $this->assertEquals(sqrt(5 * 5 + 2 * 2), ComplexNumber::abs($x));
        $this->assertEquals(sqrt(2 * 2 + 5 * 5), ComplexNumber::abs($y));
    }

    public function testZeroAdd() {
        $zeroComplexNumber = new ComplexNumber(0, 0);
        $this->assertEquals($zeroComplexNumber, ComplexNumber::add($zeroComplexNumber, $zeroComplexNumber));
    }
    public function testZeroSub() {
        $zeroComplexNumber = new ComplexNumber(0, 0);
        $this->assertEquals($zeroComplexNumber, ComplexNumber::sub($zeroComplexNumber, $zeroComplexNumber));
    }
    public function testZeroMult() {
        $zeroComplexNumber = new ComplexNumber(0, 0);
        $this->assertEquals($zeroComplexNumber, ComplexNumber::mult($zeroComplexNumber, $zeroComplexNumber));
    }
    public function testReverseMult() {
        $x = new ComplexNumber(3, 5);
        $y = new ComplexNumber(1 / 3 - 5 / 51, - 1 / 17);
        $this->assertEquals(new ComplexNumber(1, 1), ComplexNumber::mult($x, $y));
    }
    public function testMultWithZero1() {
        $x = new ComplexNumber(0, 0);
        $y = new ComplexNumber(3, 5);
        $this->assertEquals(new ComplexNumber(0, 0), ComplexNumber::mult($x, $y));
    }
    public function testMultWithZero2() {
        $x = new ComplexNumber(3, 5);
        $y = new ComplexNumber(0, 0);
        $this->assertEquals(new ComplexNumber(0, 0), ComplexNumber::mult($x, $y));
    }
    public function testDivWithZeroNumerator() {
        $x = new ComplexNumber(0, 0);
        $y = new ComplexNumber(3, 5);
        $this->assertEquals(new ComplexNumber(0, 0), ComplexNumber::div($x, $y));
    }
    public function testDivWithZeroDenominator() {
        $x = new ComplexNumber(3, 5);
        $y = new ComplexNumber(0, 0);
        $this->expectException(\DivisionByZeroError::class);
        $this->assertEquals(new ComplexNumber(0, 0), ComplexNumber::div($x, $y));
    }
    public function testAbsWithZero() {
        $x = new ComplexNumber(0, 0);
        $this->assertEquals(0, ComplexNumber::abs($x));
    }
}