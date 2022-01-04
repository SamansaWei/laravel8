<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToolboxController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ShoppingCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 前台的
Route::get('/',[FrontController::class,'index'])->name('index');



Route::prefix('/news')->group(function(){
    Route::get('/',[FrontController::class,'newsList']);
    Route::get('/{id}',[FrontController::class,'newsContent']);
});

Route::get('/facility',[FrontController::class,'facility'])->name('facility');

Route::post('/contact',[FrontController::class,'contact']);

Route::prefix('/product')->group(function(){
    Route::get('/',[FrontController::class,'productList'])->name('product.list');
    Route::get('/{id}',[FrontController::class,'productContent'])->name('product.content');
});

Route::prefix('/shopping-cart')->group(function(){
    Route::post('/add',[ShoppingCartController::class,'add'])->name('shopping-cart.add');
    Route::get('/content',[ShoppingCartController::class,'content']);
    Route::get('/clear',[ShoppingCartController::class,'clear']);

    Route::get('step01',[ShoppingCartController::class,'step01'])->name('shopping.cart.step01');

});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// 後台的
Route::prefix('/admin')->group(function(){
    // 最新消息
    Route::prefix('/news')->group(function(){

        Route::get('/',[NewsController::class,'index'])->name('news.index');
        Route::get('/create',[NewsController::class,'create'])->name('news.create');
        Route::post('/',[NewsController::class,'store'])->name('news.store');
        Route::get('/{id}/edit',[NewsController::class,'edit'])->name('news.edit');
        Route::patch('/{id}',[NewsController::class,'update'])->name('news.update');
        Route::delete('/{id}',[NewsController::class,'destroy'])->name('news.destroy');

    });

    Route::prefix('facility')->group(function(){
        Route::get('/',[FacilityController::class,'index'])->name('facility.index');
        Route::get('/create',[FacilityController::class,'create'])->name('facility.create');
        Route::post('/',[FacilityController::class,'store'])->name('facility.store');
    });

     // 產品
    Route::resource('products', ProductController::class);
    Route::delete('/product-image',[ProductController::class,'imageDelete'])->name('product.image_delete');

    Route::post('/image-uplpad',[ToolboxController::class,'imageUpload'])->name('tool.image_upload');



});