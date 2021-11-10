<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_examplewrong()
    {
        $this->assertTrue(true);
    }

    public function test_1und1()
    {
        $example = 1 +1;
        $this->assertEquals(2, $example);

    }
}
