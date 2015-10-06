<?php

class testCalc extends \PHPUnit_Framework_TestCase
{
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
