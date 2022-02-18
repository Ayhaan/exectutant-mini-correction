<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/admin/serveur/main', [BackController::class, 'serveur'])->middleware(['auth'])->name('serveur.main');
// Route::get('/admin/user/main', [BackController::class, 'user'])->middleware(['auth', "isAdmin"])->name('user.main');

Route::resource("/admin/user", UserController::class)->middleware(['auth']);
Route::get('/admin/users/all', [UserController::class, "allUser"])->middleware(['auth', "isAdmin"])->name('alluser.index');
//AVATAR
Route::resource("admin/avatar", AvatarController::class)->middleware(['auth', "isAdmin"]);
//IMAGE
Route::resource('/admin/image', ImageController::class);
Route::get('/gallerie', [ImageController::class, "gallerie"])->name('gallerie.index');
Route::get('/image/download/{image}', [ImageController::class, "download"])->name('image.download');

//CATEGORIES
Route::resource('/admin/categorie', CategorieController::class);
require __DIR__.'/auth.php';
