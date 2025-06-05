<?php

use PHPUnit\Framework\TestCase;

require_once 'calculator.php';

class CalculatorTest extends TestCase
{
    /**
     * Sum tests
     */

    function testSumReturnsNumber(): void
    {
        $this->assertIsNumeric(sum(3, 5));
    }
    
    function testSum3and8Equals11(): void
    {
        $this->assertEquals(11, sum(3, 8));
    }

    function testSum0and0Equals0(): void
    {
        $this->assertEquals(0, sum(0, 0));
    }

    function testSum4andMinus10EqualsMinus6(): void
    {
        $this->assertEquals(-6, sum(4, -10));
    }

    function testSumMinus1andMinus10EqualsMinus11(): void
    {
        $this->assertEquals(-11, sum(-1, -10));
    }

    function testSum3point4and4point5Equals7point9(): void
    {
        $this->assertEqualsWithDelta(7.9, sum(3.4, 4.5), 0.0001);
    }

    /**
     * Subtract tests
     */

    function testSubtract7from12Equals5(): void 
    {
        $this->assertEquals(5, subtract(12, 7));
    }

    function testSubtract7from7Equals0(): void 
    {
        $this->assertEquals(0, subtract(7, 7));
    }

    function testSubtract7from5EqualsMinus2(): void 
    {
        $this->assertEquals(-2, subtract(5, 7));
    }

    /**
     * Multiply tests
     */

    function testMultiply6by3Equals18(): void
    {
        $this->assertEquals(18, multiply(6, 3));
    }

    function testMultiply6byMinus3EqualsMinus18(): void
    {
        $this->assertEquals(-18, multiply(6, -3));
    }

    function testMultiplyMinus6by3EqualsMinus18(): void
    {
        $this->assertEquals(-18, multiply(-6, 3));
    }

    function testMultiply0by3Equals0(): void
    {
        $this->assertEquals(0, multiply(0, 3));
    }

    function testMultiply6by0Equals0(): void
    {
        $this->assertEquals(0, multiply(6, 0));
    }

    function testMultiply6point4by4point3Equals27point52(): void
    {
        $this->assertEqualsWithDelta(27.52, multiply(6.4, 4.3), 0.0001);
    }

    function testMultiply6point48by4point35Equals28point188(): void
    {
        $this->assertEqualsWithDelta(28.188, multiply(6.48, 4.35), 0.0001);
    }

    function testMultiply6point481by4point357Equals28point237717(): void
    {
        $this->assertEqualsWithDelta(28.237717, multiply(6.481, 4.357), 0.000001);
    }

    /**
     * Divide tests
     */

    function testDivide8by4Equals2(): void
    {
        $this->assertEquals(2, divide(8, 4));
    }

    function testDivide7by2Equals3Point5(): void
    {
        $this->assertEqualsWithDelta(3.5, divide(7, 2), 0.0001);
    }

    function testDivide7by4Equals1Point75(): void
    {
        $this->assertEqualsWithDelta(1.75, divide(7, 4), 0.0001);
    }

    // Periodic result
    function testDivide7by3EqualsApprox2Point33(): void
    {
        $this->assertEqualsWithDelta(2.33, divide(7, 3), 0.005);
    }

    function testDivisionByZeroRaisesException(): void
    {
        $this->expectException(DivisionByZeroError::class);
        $result = divide(7, 0);
    }
}