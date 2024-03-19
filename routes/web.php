<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Middleware\VerifyCsrfToken;
Route::get('/commandes/create',[CommandeController::class,'create']);  
Route::get('/commandes', [CommandeController::class, 'index']);
Route::middleware(VerifyCsrfToken::class)->group(function () {
    Route::post('/commandes/create', [CommandeController::class, 'store']);
});