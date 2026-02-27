<?php

namespace App\Policies;

use App\Models\ProductFaq;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductFaqPolicy
{
    use HandlesAuthorization;

    public function create(User $user, Product $product)
    {
        return $user->id == $product->main_seller_id;
    }

    public function delete(User $user, ProductFaq $productFaq)
    {
        return $user->id == $productFaq->product->main_seller_id;
    }
}
