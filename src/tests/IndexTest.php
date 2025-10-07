<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class IndexTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals("Hi, World!", sayHello("World"));
    }
}


