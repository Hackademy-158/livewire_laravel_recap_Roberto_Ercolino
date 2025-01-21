<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::get('/recipe/index', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/category/{category}',[RecipeController::class, 'filterByCategory'])->name('recipe.category');
