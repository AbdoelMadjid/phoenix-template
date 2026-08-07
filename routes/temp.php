<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Dynamic Route handler for all template pages in resources/views/temp
    Route::get('/{path}', function ($path) {
        $cleanPath = preg_replace('/\.html$/', '', $path);
        $viewPath = 'temp.' . str_replace('/', '.', $cleanPath);
        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        if (view()->exists($viewPath . '.index')) {
            return view($viewPath . '.index');
        }
        abort(404);
    })->where('path', '.*')->name('page');
});
