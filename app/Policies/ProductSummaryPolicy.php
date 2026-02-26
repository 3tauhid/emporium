<?php

namespace App\Policies;

use App\Models\ProductSummary;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductSummaryPolicy
{
    use HandlesAuthorization;

    public function create(User $user, Product $product)
    {
        return $user->id === $product->main_seller_id;
    }

    public function update(User $user, ProductSummary $productSummary)
    {
        return $user->id === $productSummary->product->main_seller_id;
    }

    public function delete(User $user, ProductSummary $productSummary)
    {
        return $user->id === $productSummary->product->main_seller_id;
    }
}
