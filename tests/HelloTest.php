<?php

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new Hello("Ilyes");
        $this->assertEquals("Hello, Ilyes!", $hello->sayHello());
    }
}
