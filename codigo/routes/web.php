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

Route::get('/index', [ClienteController::class, 'index'])->name('clienteindex');
Route::get('/create', [ClienteController::class, 'create'])->name('clientecreate');
Route::get('/show', [ClienteController::class, 'show'])->name('clienteshow');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::post('/store', [ClienteController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ClienteController::class, 'update'])->name('update');
Route::get('clientes/showendereco', [ClienteController::class, 'showendereco']);

// Rotas para fornecedor

Route::get('/createfornecedor', [FornecedorController::class, 'create'])->name('fornecedorcreate');
Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('fornecedorstore');
Route::post('/showfornecedor', [FornecedorController::class, 'show'])->name('fornecedorshow');
Route::delete('/fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('update');
Route::get('fornecedor/showendereco', [FornecedorController::class, 'showendereco']);


