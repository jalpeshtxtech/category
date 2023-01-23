<?php

use Jalpeshtxtech\Category\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest', 'web'])->group(function () {
	Route::get('category', [CategoryController::class, 'index'])->name('category.list');
    Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

