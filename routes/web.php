<?php

use App\Models\Coffee;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::get('/Home', [UserController::class, 'index']);

#abis ganti entah knp img navbar engga bsa
// Route::get('/Home/{id}', function($id){
//     return view('Home',[
//         "title" => "test",
//         "users" => UserController::login($id)
//     ]);
// });

Route::get('/Home/{id}', [UserController::class, 'login']);

Route::get('/History/{id}', [UserController::class, 'history']);

Route::get('/Coffee/{id}', [CoffeeController::class, 'index']);

// Route::get('/History', function () {
//     return view('History',[
//         "title"=>"Transaction"
//     ]);
// });
