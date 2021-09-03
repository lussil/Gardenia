<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;

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


Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');


// rotas para Página Categoria
Route::get('/categoria' , [CategoriaController::class, 'index'])->name('categoria.index');



Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{id}' ,  [CategoriaController::class, 'show'])->name('categoria.show');

Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{id}' , [CategoriaController::class, 'update'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


require __DIR__.'/auth.php';
