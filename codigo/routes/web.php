<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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

Route::get('/', function () {
    return view('welcome');
});

// Rotas para cliente

Route::get('/clientes', [ClienteController::class, 'index']);

Route::get('/index', [ClienteController::class, 'index']);

Route::get('/create', [ClienteController::class, 'create']);

Route::get('/store', [ClienteController::class, 'store']);

// Rotas para fornecedor

Route::get('fornecedor/create', [FornecedorController::class, 'create']);

Route::get('fornecedor/store', [FornecedorController::class, 'store']);

