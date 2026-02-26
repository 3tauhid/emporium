<?php

namespace App\Policies;

use App\Models\ProductManufacturerImage;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductManufacturerImagePolicy
{
    use HandlesAuthorization;

    public function create(User $user, Product $product)
    {
        return $user->id === $product->main_seller_id;
    }

    public function delete(User $user, ProductManufacturerImage $productManufacturerImage)
    {
        return $user->id === $productManufacturerImage->product->main_seller_id;
    }
}
