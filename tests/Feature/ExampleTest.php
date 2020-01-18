<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testHeader()
    {
        $response = $this->get('/header');

        $response->assertHeader('X-Header-One', 'Laravel学院')
        ->assertHeader('X-Header-Two', 'HTTP 功能测试');
    }
}
