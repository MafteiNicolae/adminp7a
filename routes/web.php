<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::middleware(['auth'])->group(function (){
   Route::get('users', [UserController::class, 'index'])->name('users.index');
   Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
   Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
   Route::resource('apartaments', \App\Http\Controllers\ApartamentController::class);
   Route::resource('contors', \App\Http\Controllers\ContorController::class);

   Route::middleware(['is_admin'])->name('admin.')->prefix('admin')->group(function (){
       Route::get('search1', [\App\Http\Controllers\Admin\SearchController::class, 'searchLuna'])->name('web.search');
       Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
       Route::get('users/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
       Route::put('users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
       Route::delete('users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
       Route::resource('apartaments', \App\Http\Controllers\Admin\ApartamentController::class);
       Route::resource('contors', \App\Http\Controllers\Admin\ContorController::class);
   });
});


//Route::resource('users', \App\Http\Controllers\UserController::class);
