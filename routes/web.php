<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CrudController::class,'index'])->name('home');
Route::post('/product/add',[CrudController::class,'create'])->name('product.add');
Route::get('/product/delete/{id}',[CrudController::class,'delete'])->name('product.delete');
Route::get('/product/edit/{id}',[CrudController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[CrudController::class,'update'])->name('product.update');
// category.....route......
Route::post('/category/add',[CategoryController::class,'create'])->name('category.add');



