<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComparingValue;

// This is a Singleton Resource Controller. But Laravel 8 does not support it.
class ComparingValueController extends Controller
{
    public function update(Request $request, $productId)
    {
        $request->validate(
            [
                'values.*' => ['required', 'string', 'max:50'],
            ],
            [
                'values.*.required' => 'The values are required.',
                'values.*.max'      => 'The values may not be greater than 50 characters.',
            ]
        );

        $values = $request->input('values');

        $comparingValues = ComparingValue::where('product_id', $productId)->get();

        foreach ($comparingValues as $comparingValue)
        {
            ComparingValue::where('id', $comparingValue->id)->update(['value' => $values[$comparingValue->id]]);
        }

        session(['success_message' => 'Successfully Updated']);

        return redirect(route('products.edit', $productId));
    }
}
