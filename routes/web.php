<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Admin;
use App\Http\Livewire\EditCollectionForm;
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

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');
Route::get('/collection/{id}', [CollectionController::class , 'show'])->name('collection.show');
Route::view('/about','about')->name('about');
Route::view('/login','login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::group(['prefix' => 'collection', 'middleware' => Admin::class], function () {
    Route::get('/', [CollectionController::class, 'index'])->name('collection.index');
    Route::get('/{id}/edit', EditCollectionForm::class)->name('collection.edit');
    Route::get('/{id}/delete', [CollectionController::class, 'delete'])->name('collection.delete');
});

