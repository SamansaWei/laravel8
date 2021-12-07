<?php
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontController::class,'index']);


Route::get('/hello',[FrontController::class,'hello']);



// Route::get('/hello', function () {
//     $name = 'Sam';
//     $age ='20';
//     // return view('hello');
//     // return view('hello', ['name' => $name , 'age' => $age]);
//     // 上面寫法資料越多會越長，可以改為
//     return view('hello', compact('name','age'));
// });
