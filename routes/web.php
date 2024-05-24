<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotasCotroller;

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

Route::get('/rotas', [RotasCotroller::class, 'index']);
Route::post('/contato', [RotasCotroller::class, 'processa']);

Route::get('/contato/{id}', function ($id) {
    str()->
    print_r('Olá, seu id é: ' . $id);
})->where('id', '[0-9]+');

Route::resource('/livro', LivroController::class);


