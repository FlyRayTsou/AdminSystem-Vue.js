<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\TestService;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testException()
	{
	    $this->expectException(\InvalidArgumentException::class);
	    $service = new TestService();
	    $service->invalidArgument();
	}
}
