<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ThanaController;
use App\Models\Thana;

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

Route::resource('divisions',DivisionController::class)
    ->except('show');

Route::resource('districts',DistrictController::class)
    ->except('show');
Route::resource('thanas',ThanaController::class)
    ->except('show');


