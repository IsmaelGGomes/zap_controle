<?php

use App\Http\Controllers\AtendenteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
//API RESOURCE
route::get('/', [ContatoController::class, 'show_contato']);
route::post('/dashboard', [ContatoController::class, 'store']);
route::get('/dashboard/edit/{id}', [ContatoController::class, 'edit']);
//TESTE API DO BC
route::get('/form', [ContatoController::class, 'chamada']);

Route::middleware('auth')->group(function () {
    //atendente
    route::post('/atendente', [AtendenteController::class, 'store']);
    route::delete('/atendente/{id}', [AtendenteController::class, 'destroy']);
    //webhook
    route::post('/webhook', [WebhookController::class, 'store']);
    route::delete('/webhook/{id}', [WebhookController::class, 'destroy']);

    route::put('/dashboard/{id}', [ContatoController::class, 'update']);
    route::delete('/dashboard/{id}', [ContatoController::class, 'destroy']);
    route::get('/dashboard', [ContatoController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
