<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sales/export', [\App\Http\Controllers\SalesExportController::class, 'export'])->name('sales.export');
