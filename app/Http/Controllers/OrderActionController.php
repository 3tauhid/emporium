<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartItem;

class OrderActionController extends Controller
{
    public function storeFromCart(Request $request)
    {
        $cartItems = CartItem::with('productSeller.product', 'productSeller.user')->where('buyer_id', auth()->id())->get();

        foreach ($cartItems as $cartItem) {
            $cartItem->productSeller->product->stock = $cartItem->productSeller->product->stock - $cartItem->quantity;
            $cartItem->productSeller->stock = $cartItem->productSeller->stock - $cartItem->quantity;
            $cartItem->productSeller->product->save();
            $cartItem->productSeller->save();

            Order::create([
                'seller_id' => $cartItem->productSeller->seller_id,
                'buyer_id' => auth()->id(),
                'name' => $cartItem->productSeller->product->name,
                'status' => 'Processing',
            ]);
        }

        CartItem::where('buyer_id', auth()->id())->delete();

        session(['success_message' => 'Successfully Purchased']);

        return response()->noContent();
    }

    public function cancel(Request $request)
    {
        $request->validate([
            'orderId' => ['required'],
        ]);

        $orderId = $request->input('orderId');

        Order::where('id', $orderId)->update(['status' => 'Canceled']);

        session(['success_message' => 'Successfully Order Canceled']);

        return response()->noContent();
    }
}
