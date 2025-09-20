<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSummary;

class ProductSummaryController extends Controller
{
    public function store(Request $request, $productId)
    {
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
            'product_id' => ['required'],
            'description' => ['required', 'string', 'max:200'],
        ]);

        $productId = $request->input('product_id');
        $description = $request->input('description');

        ProductSummary::where('id', $productSummaryId)->update(['description' => $description]);

        return redirect(route('products.edit', $productId));
    }

    public function destroy($productSummaryId)
    {
        ProductSummary::where('id', $productSummaryId)->delete();

        session(['success_message' => 'Successfully Deleted']);

        return response()->noContent();
    }
}
