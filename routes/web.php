<?php

use App\Models\produto;
use App\ENUM\ProductStatusEnum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\UserController;
use App\Http\Controllers\site\ProdutoController;
use App\Http\Controllers\site\UsuarioController;
use App\Http\Controllers\Admin\{SupportController, testeController, indexAdminController};

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

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    // pegando apenas as chaves do array
    // e depois leva para migrations
    dd(array_column(ProductStatusEnum::cases(), 'name'));
});

// ele ja importa o use automatico
Route::get('/contatos', [SiteController::class, 'contact']);
// Route::get('/', function () {
//      return view('site/contatos');
//      return view('site.contatos');
// });

// ROTAS PARA PROJETO
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/admin', [indexAdminController::class, 'index'])->name('admin.index');

// chamando na url /teste, o controller testeDoisSingularControler, a classe teste dentro do controller e dando um apelido de teste.index
Route::get('/teste', [UserController::class, 'user'])->name('teste.index');

// CRUD 
// os name, sao para passar a rota de forma dinamica pelo blade
// como ta pegando dados 'posts' o verbo agora é 'post'. pode ser a mesma URL, desde que verbo seja diferente.
Route::get('/user', [ProdutoController::class, 'index'])->name('user.index');
Route::get('/user/form', function () {
    return view('site/formUser/formProduto');
})->name('user.form');
// Route::post('/user', [ProdutoController::class, 'create'])->name('user.create');
Route::post('/user/form', [ProdutoController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [ProdutoController::class, 'show'])->name('user.show');
// Route::get('/user/{id}/form', [ProdutoController::class, 'store']) -> name('user.form');
Route::get('/user/{id}/edit', [ProdutoController::class, 'edit'])->name('user.edit');
Route::put('/user/{id})', [ProdutoController::class, 'update'])->name('user.update');
Route::delete('user/{id}', [ProdutoController::class, 'delete'])->name('user.delete');


// CRUD usuarios (na verdade contatos)
Route::get('/contatos', [UsuarioController::class, 'index'])->name('contatos.index');
// create
Route::get('/contatos/form', [UsuarioController::class, 'createForm'])->name('contatos.create.form');
Route::post('/contatos/form/created', [UsuarioController::class, 'create'])->name('contatos.create.process');
// _________________
Route::get('/contatos/show/{id}', [UsuarioController::class, 'show'])->name('contatos.show');
// edit -> update -> return index
Route::get('/contatos/edit/{id}', [UsuarioController::class, 'edit'])->name('contatos.edit');
Route::put('/contatos/update/{id}', [UsuarioController::class, 'update'])->name('contatos.update');
// _________________
Route::get('/contatos/delete/{id}', [UsuarioController::class, 'deleteForm'])->name('contatos.delete.form');
Route::delete('/contatos/deleted/{id}', [UsuarioController::class, 'delete'])->name('contatos.delete.process');

// Após breeze

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
