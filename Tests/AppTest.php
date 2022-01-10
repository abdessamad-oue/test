<?php

use PHPUnit\Framework\TestCase;
require 'Core/App.php';
use Test\Core\App;

class AppTest extends TestCase
{
    public function testAddition()
    {
        $a = 1;
        $b = 99;
        $this->assertEquals(100, App::addition($a,$b));
        
    }

    public function testBidon()
    {
        $this->assertEquals("bidon", App::bidon());
        
    }
}