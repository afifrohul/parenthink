<?php

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
    return view('frontend.index');
})-> middleware(['auth']);;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/chat', function () {
    return view('frontend.chat');
})->middleware(['auth']);

Route::get('/sharestory', function () {
    return view('frontend.sharestory');
})->middleware(['auth']);

Route::get('/storydetail', function () {
    return view('frontend.storydetail');
})->middleware(['auth']);

require __DIR__.'/auth.php';
