<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/collection/', [CollectionController::class, 'index'])->name('collection.index');
Route::get('/collection/{id}', [CollectionController::class , 'show'])->name('collection.show');
Route::view('/about','about')->name('about');

// TODO: add a gate to block these routes for non-admins
Route::get('/collection/{id}/edit', EditCollectionForm::class)->name('collection.edit');
Route::get('/collection/{id}/delete', [CollectionController::class, 'delete'])->name('collection.delete');
