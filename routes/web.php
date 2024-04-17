<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name("welcome_page");

//Rotte CRUD

Route::get('articles/create', [ArticleController::class, 'create'])->name("create_page")->middleware('auth');
Route::post('articles/store', [ArticleController::class, 'store'])->name("store_page");
Route::get('articles/index', [ArticleController::class, 'index'])->name("index_page");
Route::get('articles/show/{article}', [ArticleController::class, 'show'])->name("show_page");
Route::get('articles/edit/{article}', [ArticleController::class, 'edit'])->name("edit_page");
Route::put('articles/update/{article}', [ArticleController::class, 'update'])->name("update_page");
Route::delete('articles/update/{article}', [ArticleController::class, 'destroy'])->name("delete_page");

//Rotta profilo utente
Route::get('articles/user/profile', [PublicController::class, 'user'])->name("user_page");
