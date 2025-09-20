<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('customer')->only('store');
    }

    public function index()
    {
        $user = auth()->user(); /** @var \App\Models\User $user */

        if ($user->isCustomer()) {
            $orders = Order::where('buyer_id', auth()->id())->orderBy('id', 'desc')->get();
        }

        if ($user->isSeller()) {
            $orders = Order::where('seller_id', auth()->id())->orderBy('id', 'desc')->get();
        }

        return view('orders', [
            'orders' => $orders,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'productId' => ['required'],
            'quantity' => ['required'],
        ]);

        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        $product = Product::find($productId);
        
        $product->setRelation('main_seller_inventory', 
            $product->product_sellers()->where('seller_id', $product->main_seller_id)->first()
        );

        $product->stock = $product->stock - $quantity;
        $product->main_seller_inventory->stock = $product->main_seller_inventory->stock - $quantity;

        $product->save();
        $product->main_seller_inventory->save();

        Order::create([
            'seller_id' => $product->main_seller_id,
            'buyer_id' => auth()->id(),
            'name' => $product->name,
            'status' => 'Processing',
        ]);

        return response()->json(['message'=> 'Successfully Purchased'], 200);
    }
}
