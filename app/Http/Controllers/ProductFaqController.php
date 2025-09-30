<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductFaq;

class ProductFaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('seller')->only('store', 'destroy');
    }

    public function index($productId)
    {
        $search = request('search');

        $productFaqs = ProductFaq::where('product_id', $productId)->where('question', 'like', '%' . $search . '%')->get();

        $content = view('partials._product-faq-items', [
            'productFaqs' => $productFaqs,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function store(Request $request, $productId)
    {
        $request->validate([
            'question' => ['required', 'string', 'max:500'],
            'answer' => ['required', 'string', 'max:2000'],
        ]);

        $question = $request->input('question');
	    $answer = $request->input('answer');

        ProductFaq::create([
            'product_id' => $productId,
            'question' => $question,
            'answer' => $answer,
        ]);

        $productFaqStats = ProductFaq::selectRaw('COUNT(*) as faqCount')->where('product_id', $productId)->first();

        Product::where('id', $productId)->update(['total_faqs' => $productFaqStats->faqCount]);

        return redirect(route('products.edit', $productId));
    }

    public function destroy($productFaqId)
    {
        $faq = ProductFaq::find($productFaqId);
        
        ProductFaq::where('id', $productFaqId)->delete();

        $productFaqStats = ProductFaq::selectRaw('COUNT(*) as faqCount')->where('product_id', $faq->product_id)->first();

        Product::where('id', $faq->product_id)->update(['total_faqs' => $productFaqStats->faqCount]);

        session(['success_message' => 'Deleted successfully.']);

        return response()->noContent();
    }
}
