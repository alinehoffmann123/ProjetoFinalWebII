<?php

use App\Http\Controllers\AdocaoAnimaisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DicasController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\SobreController;

Route::get('/', function () {
  return view('home');
});

Route::get('/sobre', [SobreController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);
Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'cadastrar'])->name('cadastro.store');
Route::post('/contato', [CadastroController::class, 'contato'])->name('emails.contato');

Route::get('/adocao', [AdocaoAnimaisController::class, 'index'])->name('adocao');
Route::get('/dicas', [DicasController::class, 'index']);
Route::get('/galeria', [GaleriaController::class, 'index']);
