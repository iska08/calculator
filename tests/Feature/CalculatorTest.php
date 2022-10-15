<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFirst()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testSecond()
    {
        $response = $this->get('/calculation');

        $response->assertStatus(405);
    }
}
