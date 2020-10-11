<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Passport\Passport;
use App\Models\User;
use database\factories\UserFactory;

class CommandPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShowCommandPage()
    {
        $this->withoutExceptionHandling();
        Passport::actingAs(
            User::factory()->make()
            ,['*']
        );
        $response = $this->get('/command');
        $response->assertStatus(200);
    }
}
