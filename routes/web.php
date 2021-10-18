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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::post('/post', 'PostController@store');

Route::get('/post', 'PostController@index');

Route::get('post/{id}', 'PostController@show');

Route::post('comment', 'CommentController@store');

Route::get('post/{id}/edit', 'PostController@edit');

Route::post('post/update/{id}', 'PostController@update');

Route::post('post/delete/{id}', 'Postcontroller@destroy');

