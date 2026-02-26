<?php

namespace App\Http\Controllers;

use App\Services\StorageHandlers\DynamicStorageHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductReview;
use App\Models\ProductImage;
use App\Models\User;
use App\Models\ProductSummary;
use App\Models\ProductManufacturerImage;
use App\Models\ComparingFeature;
use App\Models\ComparingValue;
use App\Models\ProductFaq;
use App\Models\UserImage;
use App\Models\Department;
use App\Models\ComparingProduct;
use App\Models\ProductSeller;
use App\Models\CartItem;
use App\Models\Order;

class TestController extends Controller
{
    public function test1()
    {
        $productSummaryId = 1;

        $productSummary = ProductSummary::with('product')->find($productSummaryId);

        return response()->json($productSummary);
    }
    public function test2()
    {
        
    }
}
