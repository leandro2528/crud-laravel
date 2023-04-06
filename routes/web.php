<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/jogos', [JogosController::class, 'index']);

Route::fallback(function() {
    return "ERRO ao localizar a rota";
});