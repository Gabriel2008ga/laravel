<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\LoginController;

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

// Rotas de Login e Logout (Acessíveis para todos)
Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas protegidas (Apenas para quem inseriu Nome e E-mail no Login)
Route::middleware('auth')->group(function () {
    Route::get('/', [PostagemController::class, 'index']);
    
    // O ->parameters força o Laravel a usar {postagem} nas URLs e evita erros de parâmetros ausentes
    Route::resource('postagens', PostagemController::class)->parameters([
        'postagens' => 'postagem'
    ]);
});