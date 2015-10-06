<?php

class testBrowser extends PHPUnit_Extensions_Selenium2TestCase
{
    protected $url = 'http://localhost:8000/index.php';

    public function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('firefox');
        $this->setBrowserUrl($this->url);
    }

    public function tearDown()
    {
    }

    public function testAccess()
    {
        $this->url('/');
        $this->assertEquals('テスト', $this->title());
    }
}