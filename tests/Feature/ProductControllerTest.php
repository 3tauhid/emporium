<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function index_can_be_rendered()
    {
        $response = $this->get(route('products.index'));

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function storing_a_product()
    {
        $user = User::factory()->create([
            'user_role_id' => 2, // seller
            'is_active' => 1,
        ]);

        $this->actingAs($user);

        $this->post(route('products.store'), [

        ]);

        $this->assertDatabaseHas('products', [
            'main_seller_id' => $user->id,
        ]);

        $this->assertDatabaseHas('comparing_products', ['slot' => 1]);
        $this->assertDatabaseHas('comparing_products', ['slot' => 2]);

        $this->assertDatabaseHas('product_sellers', [
            'seller_id' => $user->id,
        ]);
    }

    /**
     * @test
     * @return void
     */
    public function showing_a_product()
    {
        $product = Product::factory()->create([
            'department_id' => null,
            'brand_id' => null,
        ]);

        $response = $this->get(route('products.show', $product->id));
        
        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function edit_can_be_rendered()
    {
        $user = User::factory()->create([
            'user_role_id' => 2, // seller
            'is_active' => 1,
        ]);

        $this->actingAs($user);
        
        $product = Product::factory()->create([
            'main_seller_id' => $user->id,
            'department_id' => null,
            'brand_id' => null,
        ]);

        $response = $this->get(route('products.edit', $product->id));
        
        $response->assertStatus(200);
    }
}
