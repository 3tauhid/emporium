<?php

namespace App\Policies;

use App\Models\ComparingValue;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComparingValuePolicy
{
    use HandlesAuthorization;

    public function update(User $user, Product $product)
    {
        return $user->id === $product->main_seller_id;
    }
}
