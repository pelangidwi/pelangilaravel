<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

// localhost:8000/admin/inputbuku
Route::get('/admin/inputbuku', function(){
    return view('admin.inputbuku');
});

Route::get('/admin/inputkategori', [CategoryController::class, 'index'])
->name('admin.inkategori');

// route untuk penulis
Route::get('/admin/kategori', function(){
    return view('admin.kategori');
});