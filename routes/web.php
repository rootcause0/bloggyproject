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
//GETS
Route::GET('/',[\App\Http\Controllers\mainBlog::class,'main']);
Route::GET('/content',[\App\Http\Controllers\mainBlog::class,'processor']);
Route::GET('/cat',[\App\Http\Controllers\mainBlog::class,'category']);
Route::GET('/logout',[\App\Http\Controllers\mainBlog::class,'logOut'])->middleware('auth');  // Category GET
Route::GET('/add',[\App\Http\Controllers\mainBlog::class,'addContent'])->middleware('auth');
Route::GET('/err',function(){

    return View('Layout/Partials/noCat');
}

);
Route::GET('/register',function(){
return View('Layout/Partials/register');
});
Route::GET('/login',function()
{
    return View('Layout/Partials/login');
}
);
Route::GET('/update',[\App\Http\Controllers\mainBlog::class,'update'])->middleware('auth');
Route::GET('/delete',[\App\Http\Controllers\mainBlog::class,'delete'])->middleware('auth');
// POST Methods
Route::POST('/mainBlog/register',[\App\Http\Controllers\mainBlog::class,'register']);
Route::POST('/mainBlog/login',[\App\Http\Controllers\mainBlog::class,'login']);
Route::POST('/addCategory',[\App\Http\Controllers\mainBlog::class,'addCategory'])->middleware('auth');
Route::POST('/add',[\App\Http\Controllers\mainBlog::class,'addContentProc'])->middleware('auth');
Route::POST('/update',[\App\Http\Controllers\mainBlog::class,'updateProc'])->middleware('auth');