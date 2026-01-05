<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;
use App\Models\ProductSummary;
use App\Models\User;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function a_product_has_seller()
    {
        $product = Product::factory()->create([
            'department_id' => null,
            'brand_id' => null,
        ]);

        $this->assertInstanceOf(User::class, $product->user);
    }

    /**
     * @test
     * @return void
     */
    public function a_product_has_summaries()
    {
        $product = Product::factory()->hasProductSummaries(5)->create([
            'department_id' => null,
            'brand_id' => null,
        ]);

        $this->assertInstanceOf(Collection::class, $product->productSummaries);
        $this->assertInstanceOf(ProductSummary::class, $product->productSummaries->first());
    }

    /**
     * @test
     * @return void
     */
    public function search_filter_works()
    {
        Product::factory()->create([
            'department_id' => null,
            'brand_id' => null,
        ]);

        Product::factory()->create([
            'department_id' => null,
            'brand_id' => null,
            'name' => 'Test Product',
        ]);

        $products = Product::filter(['search' => 'Test'])->get();
        
        $this->assertCount(1, $products);
        $this->assertEquals('Test Product', $products->first()->name);
    }
}
