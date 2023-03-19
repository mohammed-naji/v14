<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/', function() { return 'Admin Main'; });
    Route::get('/home', function() { return 'Admin Home'; });
    Route::get('/posts', function() { return 'Admin Posts'; });
    Route::get('/products', function() { return 'Admin Products'; });
    Route::get('/orders', function() { return 'Admin Orders'; });
});
