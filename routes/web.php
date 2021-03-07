<?php

use App\Http\Controllers\PaiAdotivoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cadastro', [PaiAdotivoController::class, 'index']);
Route::post('/cadastro/novo', [PaiAdotivoController::class, 'store'])->name('paiAdotivo.store');
