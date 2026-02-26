<?php

namespace App\Policies;

use App\Models\ProductImage;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductImagePolicy
{
    use HandlesAuthorization;

    public function create(User $user, Product $product)
    {
        return $user->id === $product->main_seller_id;
    }

    public function delete(User $user, ProductImage $productImage)
    {
        return $user->id === $productImage->product->main_seller_id;
    }
}
