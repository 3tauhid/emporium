<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartItem;

class OrderActionController extends Controller
{
    public function storeFromCart(Request $request)
    {
        $cartItems = CartItem::with('product_seller.product', 'product_seller.user')->where('buyer_id', auth()->id())->get();

        foreach ($cartItems as $cartItem) {
            $cartItem->product_seller->product->stock = $cartItem->product_seller->product->stock - $cartItem->quantity;
            $cartItem->product_seller->stock = $cartItem->product_seller->stock - $cartItem->quantity;
            $cartItem->product_seller->product->save();
            $cartItem->product_seller->save();

            Order::create([
                'seller_id' => $cartItem->product_seller->seller_id,
                'buyer_id' => auth()->id(),
                'name' => $cartItem->product_seller->product->name,
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
