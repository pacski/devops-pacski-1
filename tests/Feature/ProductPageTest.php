<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Passport\Passport;
use App\Models\User;
use database\factories\UserFactory;

class ProductPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShowProductPage()
    {
        Passport::actingAs(
            User::factory()->make()
            ,['*']
        );
        $response = $this->get('/product');
        $response->assertStatus(200);
    }
}
