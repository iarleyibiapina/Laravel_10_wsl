<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Testar com extensao no vs thunderCliente

// Semelhanta ao Resource em web, mas com os apenas os 4 metodos de uma api.
// Mesmo nome de controller mas vindo de um recurso diferente
Route::apiResource('/produtos', ProdutoController::class);
