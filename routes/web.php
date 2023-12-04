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
route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
route::get('/modalidade/cardiovascular', [ModalidadeController::class, 'cardiovascular'])->name('modalidade.cardiovascular');
route::get('/modalidade/crossfit', [ModalidadeController::class, 'crossfit'])->name('modalidade.crossfit');
route::get('/modalidade/pilates', [ModalidadeController::class, 'pilates'])->name('modalidade.pilates');
route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');
route::get('/modalidade/zumba', [ModalidadeController::class, 'zumba'])->name('modalidade.zumba');
route::get('/modalidade/box', [ModalidadeController::class, 'box'])->name('modalidade.box');
route::get('/modalidade/artes_marciais', [ModalidadeController::class, 'artes_marciais'])->name('modalidade.artes_marciais');
route::get('/modalidade/judo', [ModalidadeController::class, 'judo'])->name('modalidade.judo');
