<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class ProductControllerAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function customer_can_not_edit_product()
    {
        $product = Product::factory()->create([
            'department_id' => null,
            'brand_id' => null,
        ]);

        $user = User::factory()->create([
            'user_role_id' => 3, // customer
            'is_active' => 1,
        ]);

        $this->actingAs($user);

        $response = $this->get(route('products.edit', $product->id));
        
        $response->assertRedirect(route('signin'));
    }
}
