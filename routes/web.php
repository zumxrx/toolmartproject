<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AdminController;



route::get('/',[HomeController::class,'index']);

route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect',[HomeController::class,'redirect']);
route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);

route::POST('/add_product',[AdminController::class,'add_product']);

route::get('/show_product', [AdminController::class, 'showProductsAndTools'])->name('show_product');

route::get('/delete_tool/{id}',[AdminController::class,'delete_tool']);

Route::get('/update_product/{id}', [AdminController::class, 'editProduct'])->name('update_product');

route::post('/update_tool_confirm/{id}',[AdminController::class,'update_tool_confirm']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

Route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');



route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

route::post('/add_tool', [AdminController::class, 'add_tool'])->name('add_tool');

route::get('/order',[AdminController::class,'order']);

route::get('/delivered/{id}',[AdminController::class,'delivered']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/faq', [HomeController::class, 'faq']);


Route::get('/products', [HomeController::class, 'products']);

Route::get('/search_product', [HomeController::class, 'search_product']);

Route::get('/view_dashboard', [AdminController::class, 'view_dashboard']);

Route::post('/add_review/{tool_id}', [HomeController::class, 'add_review'])->name('add_review');