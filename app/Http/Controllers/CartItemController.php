<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartItemController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product_seller.product.product_images', 'product_seller.user')->where('buyer_id', auth()->id())->get();

        return view('cart', [
            'cartItems' => $cartItems,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'productSellerID' => ['required'],
            'quantity' => ['required', 'integer', 'max:255'],
        ]);

        $productSellerID = $request->input('productSellerID');
	    $quantity = $request->input('quantity');

        CartItem::create([
            'buyer_id' => auth()->id(),
            'product_seller_id' => $productSellerID,
            'quantity' => $quantity,
        ]);

        return response()->json(['message'=> 'Successfully Added'], 200);
    }

    public function destroy($cartItemId)
    {
        CartItem::where('id', $cartItemId)->delete();

        session(['success_message' => 'Successfully Deleted']);

        return response()->noContent();
    }
}
