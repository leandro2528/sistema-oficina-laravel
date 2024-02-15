<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Fornecedorcontroller;

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
