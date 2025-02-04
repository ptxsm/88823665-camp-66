<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/login',
 [LoginController::class, 'index']);

Route::get('/register',
 [RegisterController::class, 'index']);
 
 Route::get('/home',
 [HomeController::class, 'index']);
 Route::get('/',
 [HomeController::class, 'index']);

 Route::post('/mycontroller/{id?}',
 [MyController::class, 'myfunction']);

Route::get('/', function () {
    return view('home');    
});
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'edit']);
Route::put('/user',[UserController::class ,'edit_action']);
Route::delete('/user',[UserController::class, 'delete']);

Route::get('/hello{/id?}', 
    function ($val = ""){
    return "<h1>Hello World! $val</h1>";
});

