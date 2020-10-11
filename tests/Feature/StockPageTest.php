<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StockPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShowStockPage()
    {
        $response = $this->get('/stock');

        $response->assertStatus(200);
    }
}
