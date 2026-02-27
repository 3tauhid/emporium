<?php

namespace App\Policies;

use App\Models\ComparingProduct;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComparingProductPolicy
{
    use HandlesAuthorization;

    public function update(User $user, ComparingProduct $comparingProduct)
    {
        return $user->id == $comparingProduct->mainProduct->main_seller_id;
    }

    public function delete(User $user, ComparingProduct $comparingProduct)
    {
        return $user->id == $comparingProduct->mainProduct->main_seller_id;
    }
}
