<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserContoroller;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNull;

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
    if(isNull(Auth::user())) {
        return redirect("/login");
    } else {
        return redirect(route('home'));
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');


Route::prefix('/user')->middleware('auth')->group(function() {
    Route::get('/profile', [MovieController::class, 'profile'])->name('userProfile');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('userHome');
    Route::put('/profile', [UserContoroller::class, 'update'])->name('user.update');

    Route::get('/comments', [MovieController::class], 'comments')->name('movies.comment');
});
