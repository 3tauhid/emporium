<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function reset_password_screen_can_be_rendered()
    {
        $user = User::factory()->create([
            'is_active' => 1,
        ]);

        $this->actingAs($user);

        $response = $this->get(route('reset_password'));

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function password_can_be_reset()
    {
        $user = User::factory()->create([
            'is_active' => 1,
        ]);

        $this->actingAs($user);

        $response = $this->post(route('reset_password'), [
            'old_password' => 'password',
            'new_password' => 'new-password',
        ]);

        $response->assertRedirect(route('profile.show'));
    }
}
