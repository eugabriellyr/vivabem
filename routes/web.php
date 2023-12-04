<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
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

// Route::get('/', function () {
    // return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

route::get('/contato', [ContatoController::class, 'index'])->name('contato');
route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
route::get('/noticias', [ NoticiasController::class, 'index'])->name('noticias');
route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
route::get('/treino',[TreinoController::class, 'index'])->name('treino');



