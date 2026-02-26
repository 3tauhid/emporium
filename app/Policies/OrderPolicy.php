<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function cancel(User $user, Order $order)
    {
        if ($user->isCustomer()) {
            return $user->id === $order->buyer_id;
        }

        if ($user->isSeller()) {
            return $user->id === $order->seller_id;
        }
    }
}
