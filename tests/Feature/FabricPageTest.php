<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FabricPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShowFabricPage()
    {
        $response = $this->get('/fabric');

        $response->assertStatus(200);
    }
}
