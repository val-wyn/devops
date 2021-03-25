<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class userTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
//    public function test_example()
//    {
//        $response = $this->get('/api/users/');
//
//        $response->assertStatus(200);
//    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

}
