<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function(){
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage.index');
Route::post('/formsubmit', [HomeController::class, 'formstatus'])->name('homepage.formsubmit');

Route::get('/user/view/{id}', [HomeController::class, 'viewuser'] );

Route::get('/user/update/{id}', [HomeController::class, 'updateuser'] );

Route::post('/user/save/{id}', [HomeController::class, 'saveuser'] );
