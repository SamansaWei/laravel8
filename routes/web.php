<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/create-news',[FrontController::class,'ceeateNews']);

// Route::get('/update-news/{id}',[FrontController::class,'updateNews']);

// Route::get('/destroy-news/{id}',[FrontController::class,'destroyNews']);

// Route::get('/add-news',[FrontController::class,'addNews']);

// Route::post('/add-anter',[FrontController::class,'addAnter']);

// Route::get('/hello',[FrontController::class,'hello']);



// Route::get('/hello', function () {
//     $name = 'Sam';
//     $age ='20';
//     // return view('hello');
//     // return view('hello', ['name' => $name , 'age' => $age]);
//     // 上面寫法資料越多會越長，可以改為
//     return view('hello', compact('name','age'));
// });


Route::get('/',[FrontController::class,'index']);

Route::prefix('/news')->group(function(){
    Route::get('/',[FrontController::class,'newsList']);
    Route::get('/{id}',[FrontController::class,'newsContent']);
});

// Route::get('/news',[FrontController::class,'newsList']);

// Route::get('/news/{id}',[FrontController::class,'newsContent']);

Route::post('/contact',[FrontController::class,'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
