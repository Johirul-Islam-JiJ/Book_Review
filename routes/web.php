<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\SubCategoryController;



Route::get('/', [HomepageController::class, 'index'])
    ->name('homepage');
Route::resource('books',BookController::class)
    ->except('show');
Route::resource('reviewers',ReviewerController::class);
Route::resource('categories',CategoryController::class)
    ->except('show');
Route::resource('sub-categories',SubCategoryController::class)
    ->except('show')
    ->parameters(['sub-categories' => 'subCategory']);

