<?php

namespace App\Policies;

use App\Models\ProductSeller;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductSellerPolicy
{
    use HandlesAuthorization;

    public function update(User $user, ProductSeller $productSeller)
    {
        return $user->id === $productSeller->seller_id;
    }
}
