<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\InjectVariableMiddleware;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

   
// );





  



   
Route::get('/',[HomeController::class,'index']);


Route::get('/login', [UserController::class, 'index'])->name('login.index');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost'])->name('register_post'); 

 Route::delete('/logout', [UserController::class, 'logout'])->name('logout'); 



 Route::get('/contact',[ContactController::class,'index'])->name('contact.form');
 Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

 Route::resource("/post", PostController::class)->middleware("auth");

 Route::get('/about',function(){
    return view('about');
}); 

Route::get('/service',function(){
    return view('service');
});


  