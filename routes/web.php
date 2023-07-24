<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\UserController;
use Illuminate\Support\Facades\Route;

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

// ele ja importa o use automatico
Route::get('/contatos', [SiteController::class, 'contact']);
// Route::get('/', function () {
//      return view('site/contatos');
//      return view('site.contatos');
// });

Route::get('/user', [UserController::class, 'user']);

Route::get('/welcome', function () {
    return view('welcome');
});

// ROTAS PARA PROJETO

Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
