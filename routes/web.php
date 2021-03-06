<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Sample;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::get('/test', function() {
    return view('test');
});

Route::get('/post/{id}/edit', [PostsController::class, 'edit']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    dd(Auth::user());
    return $request->user();
});

Route::get('/user/delete', function () {
    $user = Auth::loginUsingId(50);
    $user->tokens()->delete();
    dd($user->tokens()->delete());
    return $user->tokens()->delete();
});

Route::get('/samplejob', [Sample::class, 'job']);


// Route::get('/userConfirm', function() {
//     dd(Auth::user());
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/movie',[MoviesController::class, 'show'])->name('movie.show');
Route::get('/movie/register',[MoviesController::class, 'index'])->name('movie');
Route::post('/movie/register',[MoviesController::class, 'register'])->name('moviePost');
