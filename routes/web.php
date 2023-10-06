<?php

use App\Http\Controllers\Admin\{SupportController, testeController, indexAdminController};
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\UserController;
use App\Http\Controllers\site\ProdutoController;
    use App\Models\produto;
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

// ele ja importa o use automatico
Route::get('/contatos', [SiteController::class, 'contact']);
// Route::get('/', function () {
//      return view('site/contatos');
//      return view('site.contatos');
// });


// ROTAS PARA PROJETO
Route::get('/supports', [SupportController::class, 'index']) -> name('supports.index');
Route::get('/admin', [indexAdminController::class, 'index']) -> name('admin.index');

// chamando na url /teste, o controller testeDoisSingularControler, a classe teste dentro do controller e dando um apelido de teste.index
Route::get('/teste', [UserController::class, 'user']) -> name('teste.index');


// os name, sao para passar a rota de forma dinamica pelo blade
Route::get('/user', [ProdutoController::class, 'index']) -> name('user.index');
// como ta pegando dados 'posts' o verbo agora é 'post'. pode ser a mesma URL, desde que verbo seja diferente.
Route::post('/user', [ProdutoController::class, 'store']) -> name('user.store');
// ROTAS DE FORMULARIO
// EXIBIR
Route::get('/user/form', [ProdutoController::class, 'create']) -> name('user.create');
