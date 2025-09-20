<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderActionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSellerController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\ProductActionController;
use App\Http\Controllers\UserImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductManufacturerImageController;
use App\Http\Controllers\ProductFaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserActionController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProductSummaryController;
use App\Http\Controllers\ComparingProductController;
use App\Http\Controllers\ComparingValueController;
use App\Http\Controllers\ProductSellerActionController;
use App\Http\Controllers\ComparableProductController;
use App\Http\Controllers\TestController;

Route::get('/', HomepageController::class)->name('homepage');
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('user-images', UserImageController::class);
Route::resource('products.reviews', ProductReviewController::class)->shallow();
Route::resource('products.sellers', ProductSellerController::class)->shallow();
Route::resource('compaing-products', ComparingProductController::class);
Route::resource('main-products.comparing-slots.pages.products', ComparableProductController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.update');

    Route::put('/cancel-order', [OrderActionController::class, 'cancel'])->name('cancel_order');
});

Route::middleware('customer')->group(function () {
    Route::resource('cart-items', CartItemController::class);
    Route::post('/store-from-cart', [OrderActionController::class, 'storeFromCart'])->name('store_from_cart');
});

Route::get('/show-product-image/{product_image}', [ProductActionController::class, 'showProductImage'])->name('show_product_image');

Route::middleware('seller')->group(function () {
    Route::resource('comparing-values', ComparingValueController::class);
    Route::resource('products.faqs', ProductFaqController::class)->shallow();
    Route::resource('product-manufacturer-images', ProductManufacturerImageController::class);
    Route::resource('products.summaries', ProductSummaryController::class)->shallow();
    Route::resource('seller-products', SellerProductController::class);
    Route::resource('product-images', ProductImageController::class);

    Route::put('/update-product-name', [ProductActionController::class, 'updateProductName'])->name('update_product_name');
    Route::put('/update-product-brand', [ProductActionController::class, 'updateProductBrand'])->name('update_product_brand');
    Route::post('/update-product-with-new-brand', [ProductActionController::class, 'updateProductWithNewBrand'])->name('update_product_with_new_brand');
    Route::put('/update-product-department', [ProductActionController::class, 'updateProductDepartment'])->name('update_product_department');
    Route::put('/update-product-description', [ProductActionController::class, 'updateProductDescription'])->name('update_product_description');
    Route::put('/update-auth-product-seller', [ProductSellerActionController::class, 'updateAuthProductSeller'])->name('update_auth_product_seller');
});

Route::middleware('admin')->group(function () {
    Route::resource('users', UserController::class);
    Route::get('/search-user', [UserActionController::class, 'search'])->name('search_user');
    Route::put('/deactivate-user', [UserActionController::class, 'deactivate'])->name('deactivate_user');
    Route::put('/activate-user', [UserActionController::class, 'activate'])->name('activate_user');
});

require __DIR__.'/auth.php';

// You can delete below part.
if (config('app.env') == 'local') {
    Route::get('/test1', [TestController::class, 'test1']);
    Route::get('/test2', [TestController::class, 'test2']);
}
