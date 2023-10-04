<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\UserController;
use App\Http\Controllers\adminHome;
use App\Http\Controllers\TesteDoisSingularController;
use App\Models\testeDoisSingular;
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

Route::get('/', function(){
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// ele ja importa o use automatico
Route::get('/contatos', [SiteController::class, 'contact']);
// Route::get('/', function () {
//      return view('site/contatos');
//      return view('site.contatos');
// });

Route::get('/user', [UserController::class, 'user']);

// ROTAS PARA PROJETO

Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
Route::get('/admin', [adminHome::class, 'index']) -> name('admin.index');

// chamando na url /teste, o controller testeDoisSingularControler, a classe teste dentro do controller e dando um apelido de teste.index
Route::get('/teste', [TesteDoisSingularController::class, 'test']) -> name('teste.index');