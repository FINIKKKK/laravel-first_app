<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('home', [MainController::class, 'home']);
});

Route::get('/about', [MainController::class, 'about']);

Route::get('/reviews', [MainController::class, 'reviews']);
Route::post('/reviews/check', [MainController::class, 'reviews_check']);

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: ' . $id . '; NAME: ' . $name;
// });
