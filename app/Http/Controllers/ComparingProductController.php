<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComparingProduct;

class ComparingProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('seller')->only('update', 'destroy');
    }

    public function update(Request $request, $comparingProductId)
    {
        $request->validate([
            'productId' => ['required'],
        ]);

        $productId = $request->input('productId');

        $comparingProduct = ComparingProduct::with('mainProduct')->find($comparingProductId);

        $this->authorize('update', $comparingProduct);

        ComparingProduct::where('id', $comparingProductId)->update(['product_id' => $productId]);

        return response()->json(['message'=> 'Successfully Updated'], 200);
    }

    public function destroy($comparingProductId)
    {
        $comparingProduct = ComparingProduct::with('mainProduct')->find($comparingProductId);

        $this->authorize('update', $comparingProduct);
        
        ComparingProduct::where('id', $comparingProductId)->update(['product_id' => null]);

        return response()->json(['message'=> 'Successfully Deleted'], 200);
    }
}
