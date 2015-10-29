<?php

class CalcTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testAdd()
    {
        $result = add(1, 2);
        $expect = 3;

        $this->assertEquals($expect, $result);

        $result = add(-10, 2);
        $expect = -8;

        $this->assertEquals($expect, $result);
    }
}
