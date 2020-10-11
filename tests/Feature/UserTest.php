<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Passport\Passport;
use App\Models\User;
use database\factories\UserFactory;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Passport::actingAs(
            User::factory()->make()
            ,['*']
        );
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
