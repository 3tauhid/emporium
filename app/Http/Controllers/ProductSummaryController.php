<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSummary;
use App\Models\Product;

class ProductSummaryController extends Controller
{
    public function store(Request $request, $productId)
    {
        $product = Product::find($productId);

        $this->authorize('create', [ProductSummary::class, $product]);

        ProductSummary::create([
            'product_id' => $productId,
            'description' => 'New Description',
        ]);

        session(['success_message' => 'Successfully Added']);

        return response()->noContent();
    }

    public function update(Request $request, $productSummaryId)
    {
        $request->validate([
            'description' => ['required', 'string', 'max:200'],
        ]);

        $description = $request->input('description');

        $productSummary = ProductSummary::with('product')->find($productSummaryId);

        $this->authorize('update', $productSummary);

        ProductSummary::where('id', $productSummaryId)->update(['description' => $description]);

        return redirect(route('products.edit', $productSummary->product->id));
    }

    public function destroy($productSummaryId)
    {
        $productSummary = ProductSummary::with('product')->find($productSummaryId);

        $this->authorize('delete', $productSummary);

        ProductSummary::where('id', $productSummaryId)->delete();

        session(['success_message' => 'Successfully Deleted']);

        return response()->noContent();
    }
}
