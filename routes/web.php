<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PromocaoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ArquivoController;

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


Route::get('/', [SiteController::class, 'index'])->name('doceriagardenia.index');
Route::get('/contato', [SiteController::class, 'contato'])->name('doceriagardenia.contato');
Route::get('/produtos', [SiteController::class, 'produtos'])->name('doceriagardenia.produtos');
Route::get('/promocoes', [SiteController::class, 'promocao'])->name('doceriagardenia.promocao');
Route::get('/quemsomos', [SiteController::class, 'quemsomos'])->name('doceriagardenia.quemSomos');


// Rotas do Carrinho
Route::get('/carrinho', [SiteController::class, 'carrinho'])->name('doceriagardenia.carrinho');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('doceriagardenia.checkout');

Route::get('/adicionarProduto/{id}', [SiteController::class, 'show'])->name('doceriagardenia.show');
Route::post('/addProduto', [SiteController::class, 'addProduto'])->name('doceriagardenia.addProduto');
Route::delete('/removeProduto/{key}',[SiteController::class,'removeProduto'])->name('removeProduto');

Route::post ('/concluirPedido', [SiteController::class, 'concluirPedido'])->name('doceriagardenia.concluirPedido');
// ---------
Route::get('/dashboard',  [PedidoController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// ------------------- Rotas para user
Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->middleware(['auth'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->middleware(['auth'])->name('user.store');

Route::get('/user/{id}/edit' , [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');

Route::get('/user/perfil', [UserController::class, 'perfil'])->middleware(['auth'])->name('user.perfil');

Route::get('/user/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('user.show');


Route::delete('/user/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('user.destroy');

// ------------------- Rotas para perfil
// Route::get('/user/perfil', [UserController::class, 'perfil'])->middleware(['auth'])->name('user.perfil');


// ------------------- Rotas para página Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->middleware(['auth' , 'can:administrador'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->middleware(['auth'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'store'])->middleware(['auth'])->name('categoria.store');

Route::get('/categoria/{id}',  [CategoriaController::class, 'show'])->middleware(['auth'])->name('categoria.show');

Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->middleware(['auth'])->name('categoria.edit');
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->middleware(['auth'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->middleware(['auth'])->name('categoria.destroy');


// ------------------- Rotas para página produto.
Route::get('/produto' , [ProdutoController::class, 'index'])->middleware(['auth'])->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create'])->middleware(['auth'])->name('produto.create');
Route::post('/produto/create', [ProdutoController::class, 'store'])->middleware(['auth'])->name('produto.store');

Route::get('/produto/{id}',  [ProdutoController::class, 'show'])->middleware(['auth'])->name('produto.show');

Route::get('/produto/{id}/edit' , [ProdutoController::class, 'edit'])->middleware(['auth'])->name('produto.edit');
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->middleware(['auth'])->name('produto.update');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->middleware(['auth'])->name('produto.destroy');


// ------------------- Rotas para página Comentários
Route::get('/comentario' , [ComentarioController::class, 'index'])->name('comentario.index');

Route::get('/comentario/create', [ComentarioController::class, 'create'])->name('comentario.create');
Route::post('/comentario/create', [ComentarioController::class, 'store'])->name('comentario.store');

Route::get('/comentario/{id}' ,  [ComentarioController::class, 'show'])->name('comentario.show');

Route::get('/comentario/{id}/edit' , [ComentarioController::class, 'edit'])->name('comentario.edit');
Route::put('/comentario/{id}' , [ComentarioController::class, 'update'])->name('comentario.update');

Route::delete('/comentario/{id}', [ComentarioController::class, 'destroy'])->name('comentario.destroy');

// ------------------- Rotas para página promocao.
Route::get('/promocao' , [PromocaoController::class, 'index'])->middleware(['auth'])->name('promocao.index');

Route::get('/promocao/create', [PromocaoController::class, 'create'])->middleware(['auth'])->name('promocao.create');
Route::post('/promocao/create', [PromocaoController::class, 'store'])->middleware(['auth'])->name('promocao.store');

Route::get('/promocao/{id}',  [PromocaoController::class, 'show'])->middleware(['auth'])->name('promocao.show');

Route::get('/promocao/{id}/edit' , [PromocaoController::class, 'edit'])->middleware(['auth'])->name('promocao.edit');
Route::put('/promocao/{id}', [PromocaoController::class, 'update'])->middleware(['auth'])->name('promocao.update');

Route::delete('/promocao/{id}', [PromocaoController::class, 'destroy'])->middleware(['auth'])->name('promocao.destroy');


// ------------------- Rotas para pedidos
Route::get('/pedido', [PedidoController::class , 'index'])->name('pedido.index');

Route::get('/pedido/andamento', [PedidoController::class , 'andamento'])->name('pedido.andamento');

Route::get('/pedido/concluidos', [PedidoController::class , 'concluidos'])->name('pedido.concluidos');

Route::get('/pedido/cancelados', [PedidoController::class , 'cancelados'])->name('pedido.cancelados');


Route::get('/pedido/{id}/statusCancelado', [PedidoController::class , 'statusCancelado'])->name('pedido.statusCancelado');

Route::get('/pedido/{id}/statusConcluido', [PedidoController::class , 'statusConcluido'])->name('pedido.statusConcluido');

Route::get('/pedido/{id}/statusAndamento', [PedidoController::class , 'statusAndamento'])->name('pedido.statusAndamento');

Route::get('/pedido/{id}', [PedidoController::class , 'show'])->name('pedido.show');


Route::get('/arquivocreate/{id}', [ArquivoController::class, 'create'])->name('arquivo.create');

Route::post('/arquivocreate', [ArquivoController::class, 'store'])->name('arquivo.store');

Route::delete('arquivocreate/{id}', [ArquivoController::class, 'destroy'])->name('arquivocreate.destroy');


require __DIR__.'/auth.php';
