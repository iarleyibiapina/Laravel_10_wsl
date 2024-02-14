<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProdutoApiResource;
use Illuminate\Http\Request;
use App\Services\ProdutoService;
use App\Http\Controllers\Controller;
use App\DTO\Produtos\CreateProdutoDTO;
use App\Http\Requests\CreateEditProduto;

class ProdutoController extends Controller
{

    // trocar header no cliente para 
    // accept = application/json
    public function __construct(
        protected ProdutoService $service
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dados = $this->service->getAll();

        return $dados;
        // return new ProdutoApiResource($dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEditProduto $request)
    {
        // reaproveita codigo
        $produto = $this->service->new(CreateProdutoDTO::makeFromRequest($request));

        // laravel ja converte para json

        // padronizar responses com 'api resource', criando um novo resource
        // return $produto;

        // Para retornar 1 registro usando agora resource
        return new ProdutoApiResource($produto);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
