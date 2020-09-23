<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a ma which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\mainBlog::class,'main']);
//Content just a path.
Route::get('/content',[\App\Http\Controllers\mainBlog::class,'processor']);
Route::get('/cat',[\App\Http\Controllers\mainBlog::class,'category']); // Category GET
Route::get('/register',function(){

return View('Layout/Partials/register');

});

Route::POST('/mainBlog',[\App\Http\Controllers\mainBlog::class,'register']);
