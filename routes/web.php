<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/dashboard', function () {return view('painel');})->middleware(['auth'])->name('painel');
// rotas para user
Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');


// rotas para Página Categoria
Route::get('/categoria' , [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{id}' ,  [CategoriaController::class, 'show'])->name('categoria.show');

Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{id}' , [CategoriaController::class, 'update'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
// rotas para Página produto

Route::get('/produto' , [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');

Route::get('/produto/{id}' ,  [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/produto/{id}/edit' , [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{id}' , [ProdutoController::class, 'update'])->name('produto.update');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');

require __DIR__.'/auth.php';
