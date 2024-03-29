<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\FuncionarioController;

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

Route::prefix('/')->group( function() {
    Route::get('/', [Dashboardcontroller::class, 'index'])->name('dashboards-index');
});

Route::prefix('/clientes')->group(function() {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes-index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes-create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes-store');
    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
    Route::put('/{id}', [ClienteController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');
});

Route::prefix('/fornecedors')->group(function() {
    Route::get('/', [FornecedorController::class, 'index'])->name('fornecedors-index');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedors-create');
    Route::post('/', [FornecedorController::class, 'store'])->name('fornecedors-store');
    Route::get('/{id}/edit', [FornecedorController::class, 'edit'])->where('id', '[0-9]+')->name('fornecedors-edit');
    Route::put('{id}', [FornecedorController::class, 'update'])->where('id', '[0-9]+')->name('fornecedors-update');
    Route::delete('/{id}', [FornecedorController::class, 'destroy'])->where('id', '[0-9]+')->name('fornecedors-destroy');
});

Route::prefix('/produtos')->group(function() {
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos-index');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos-create');
    Route::post('/', [ProdutoController::class, 'store'])->name('produtos-store');
    Route::get('/{id}/edit', [ProdutoController::class, 'edit'])->where('id', '[0-9]+')->name('produtos-edit');
    Route::put('/{id}', [ProdutoController::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
    Route::delete('/{id}', [ProdutoController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');
});

Route::prefix('/servicos')->group(function() {
    Route::get('/', [ServicoController::class, 'index'])->name('servicos-index');
    Route::get('/create', [ServicoController::class, 'create'])->name('servicos-create');
    Route::post('/', [ServicoController::class, 'store'])->name('servicos-store');
    Route::get('/{id}/edit', [ServicoController::class, 'edit'])->where('id', '[0-9]+')->name('servicos-edit');
    Route::put('/{id}', [ServicoController::class, 'update'])->where('id', '[0-9]+')->name('servicos-update');
    Route::delete('/{id}', [ServicoController::class, 'destroy'])->where('id', '[0-9]+')->name('servicos-destroy');
});

Route::prefix('/veiculos')->group(function() {
    Route::get('/', [VeiculoController::class, 'index'])->name('veiculos-index');
    Route::get('/create', [VeiculoController::class, 'create'])->name('veiculos-create');
    Route::post('/', [VeiculoController::class, 'store'])->name('veiculos-store');
    Route::get('/{id}/edit', [VeiculoController::class, 'edit'])->where('id', '[0-9]+')->name('veiculos-edit');
    Route::put('{id}', [VeiculoController::class, 'update'])->where('id', '[0-9]+')->name('veiculos-update');
    Route::delete('{id}', [VeiculoController::class, 'destroy'])->where('id', '[0-9]+')->name('veiculos-destroy');
});

Route::prefix('/funcionarios')->group(function() {
    Route::get('/', [FuncionarioController::class, 'index'])->name('funcionarios-index');
    Route::get('/creat', [FuncionarioController::class, 'create'])->name('funcionarios-create');
    Route::post('/', [FuncionarioController::class, 'store'])->name('funcionarios-store');
    Route::get('{id}/edit', [FuncionarioController::class, 'edit'])->where('id', '[0-9]+')->name('funcionarios-edit');
    Route::put('{id}', [FuncionarioController::class, 'update'])->where('id', '[0-9]+')->name('funcionarios-update');
    Route::delete('/{id}', [FuncionarioController::class, 'destroy'])->where('id', '[0-9]+')->name('funcionarios-destroy');
});