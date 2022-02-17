<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\VeiculoController;
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


Route::prefix('clientes')->group(function () {
    Route::get('/index', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/add', [ClienteController::class, 'add'])->name('clientes.add');
    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/{id}/update', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/{id}/delete', [ClienteController::class, 'delete'])->name('clientes.delete');
});

Route::prefix('funcionarios')->group(function () { 
    Route::get('/index', [FuncionarioController::class, 'index'])->name('funcionarios.index');
    Route::get('create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
    Route::post('/add', [FuncionarioController::class, 'add'])->name('funcionarios.add');
    Route::get('/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
    Route::put('/{id}/update', [FuncionarioController::class, 'update'])->name('funcionarios.update');
    Route::delete('/{id}/delete', [FuncionarioController::class, 'delete'])->name('funcionarios.delete');
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/index', [FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
    Route::post('/add', [FornecedorController::class, 'add'])->name('fornecedores.add');
    Route::get('/{id}/edit', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/{id}/update', [FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::delete('/{id}/delete', [FornecedorController::class, 'delete'])->name('fornecedores.delete');
});

Route::prefix('veiculos')->group(function () {
    Route::get('/index', [VeiculoController::class, 'index'])->name('veiculos.index');
    Route::get('/create', [VeiculoController::class, 'create'])->name('veiculos.create');
    Route::post('/add', [VeiculoController::class, 'add'])->name('veiculos.add');
    // Route::get('/{id}/edit', [VeiculoController::class, 'edit'])->name('veiculos.edit');
    // Route::put('/{id}/update', [VeiculoController::class, 'update'])->name('veiculos.update');
    // Route::delete('/{id}/delete', [VeiculoController::class, 'delete'])->name('veiculos.delete');
});