<?php

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => '/'], function() {
    Route::get('/', \App\Http\Livewire\Search::class)->name('home');
    Route::get('/user/profile', \App\Http\Livewire\Profile::class)->name('profile');
    Route::get('/store-recipe', \App\Http\Livewire\StoreRecipe::class)->name('store-recipe')->middleware(['auth:sanctum', 'verified']);
    Route::get('/my-recipe', \App\Http\Livewire\MyRecipe::class)->name('my-recipe')->middleware(['auth:sanctum', 'verified']);
    Route::get('/{category}', \App\Http\Livewire\RecipeCategorized::class)->name('recipe-categorized');
    Route::get('/recipe/{id}', \App\Http\Livewire\RecipeIndex::class)->name('show-recipe');
});
