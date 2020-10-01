<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function it_should_allow_users_to_log_in_with_correct_credentials()
    {
        $user = User::factory()->create();

        $response = $this->post(
            route('login'),
            [
                'email' => $user->email,
                'password' => 'password',
            ],
        );

        $response->assertRedirect(route('home'));
    }

    /**
     * @test
     */
    public function it_should_reject_users_from_log_in_with_invalid_credentials()
    {
        $user = User::factory()->create();

        $response = $this->post(
            route('login'),
            [
                'email' => $user->email,
                'password' => 'PASS',
            ],
        );

        $response->assertRedirect('/');
    }
}
