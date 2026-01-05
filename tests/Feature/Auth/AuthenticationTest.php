<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function signin_screen_can_be_rendered()
    {
        $response = $this->get(route('signin'));

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function users_can_authenticate_using_the_signin_screen()
    {
        $user = User::factory()->create([
            'is_active' => 1,
        ]);

        $response = $this->post(route('signin'), [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    /**
     * @test
     * @return void
     */
    public function users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create([
            'is_active' => 1,
        ]);

        $this->post(route('signin'), [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
