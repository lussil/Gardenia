<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;


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
// Rotas para user
Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');


// Rotas para página Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->middleware(['auth' , 'can:administrador'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->middleware(['auth'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'store'])->middleware(['auth'])->name('categoria.store');

Route::get('/categoria/{id}',  [CategoriaController::class, 'show'])->middleware(['auth'])->name('categoria.show');

Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->middleware(['auth'])->name('categoria.edit');
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->middleware(['auth'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->middleware(['auth'])->name('categoria.destroy');

// Rotas para página produto.
Route::get('/produto' , [ProdutoController::class, 'index'])->middleware(['auth'])->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create'])->middleware(['auth'])->name('produto.create');
Route::post('/produto/create', [ProdutoController::class, 'store'])->middleware(['auth'])->name('produto.store');

Route::get('/produto/{id}',  [ProdutoController::class, 'show'])->middleware(['auth'])->name('produto.show');

Route::get('/produto/{id}/edit' , [ProdutoController::class, 'edit'])->middleware(['auth'])->name('produto.edit');
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->middleware(['auth'])->name('produto.update');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->middleware(['auth'])->name('produto.destroy');

// Rotas para página Comentários
Route::get('/comentario' , [ComentarioController::class, 'index'])->name('comentario.index');

Route::get('/comentario/create', [ComentarioController::class, 'create'])->name('comentario.create');
Route::post('/comentario/create', [ComentarioController::class, 'store'])->name('comentario.store');

Route::get('/comentario/{id}' ,  [ComentarioController::class, 'show'])->name('comentario.show');

Route::get('/comentario/{id}/edit' , [ComentarioController::class, 'edit'])->name('comentario.edit');
Route::put('/comentario/{id}' , [ComentarioController::class, 'update'])->name('comentario.update');

Route::delete('/comentario/{id}', [ComentarioController::class, 'destroy'])->name('comentario.destroy');

// Rotas para pedidos

Route::get('/pedido', [PedidoController::class , 'index'])->name('pedido.index');

Route::get('/pedido/andamento', [PedidoController::class , 'andamento'])->name('pedido.andamento');

Route::get('/pedido/concluidos', [PedidoController::class , 'concluidos'])->name('pedido.concluidos');

Route::get('/pedido/cancelados', [PedidoController::class , 'cancelados'])->name('pedido.cancelados');

Route::get('/pedido/{id}/statusAndamento', [PedidoController::class , 'statusAndamento'])->name('pedido.statusAndamento');

Route::get('/pedido/{id}', [PedidoController::class , 'show'])->name('pedido.show');



require __DIR__.'/auth.php';