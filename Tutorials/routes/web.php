<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function (): Factory|View {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [ContactController::class, 'create']);
// Route::post('/contact', [ContactController::class, 'store']);