<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShowProductPage()
    {
        $response = $this->get('/product');

        $response->assertStatus(200);
    }
}
