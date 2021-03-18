<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/add-post', [PostController::class, 'addPost']);

Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');

Route::get('/employees', [PostController::class, 'getPost']);

Route::get('/employees/{id}', [PostController::class, 'getPostById']);

Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);

Route::get('/edit-post/{id}', [PostController::class, 'editPost']);

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');


// ROUTES APIS
//Route::get('/get_company/{name}',[PostController::class,'getCompany'])->name();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');



Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
});

