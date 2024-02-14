<?php

namespace App\Http\Controllers\Api;

use App\DTO\Produtos\UpdateProdutoDTO;
use App\Http\Resources\ProdutoApiResource;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Services\ProdutoService;
use App\Http\Controllers\Controller;
use App\DTO\Produtos\CreateProdutoDTO;
use App\Http\Requests\CreateEditProduto;
use Illuminate\Http\Response as HttpResponse;

class ProdutoController extends Controller
{

    // trocar header no cliente para 
    // accept = application/json
    // content-type = application/json
    public function __construct(
        protected ProdutoService $service
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // lidando com a paginação
        // $dados = Produto::paginate();
        $dados = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 1),
            filter: $request->filter,
        );

        // Usa do mesmo meio da view, navegar pela url via ?page=1
        return ProdutoApiResource::collection($dados->items())
            ->additional([
                'meta' => [
                    'total'         => $dados->totalItems(),
                    'is_first_page' => $dados->isFirstPage(),
                    'is_last_page'  => $dados->isLastPage(),
                    'current_page'  => $dados->currentPage(),
                    'next_page'     => $dados->getNumberNextPage(),
                    'previous_page' => $dados->getNumberPreviousPage()
                ]
            ]);

        // passando mais informaçoes via additional
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
        if (!$produto = $this->service->findOne($id)) {
            return response()->json([
                'error' => 'Not Found',
                // ], 404);
                // alternativa ao codigo
            ], HttpResponse::HTTP_NOT_FOUND);
        };
        return new ProdutoApiResource($produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateEditProduto $request, string $id)
    {
        //
        if (!$this->service->findOne($id)) {
            return response()->json([
                'error' => 'Not Found',
            ], HttpResponse::HTTP_NOT_FOUND);
        };

        $produto = $this->service->update(UpdateProdutoDTO::makeFromRequest($request, $id));
        if (!$produto) {
            return response()->json([
                'error' => 'Not Found',
            ], HttpResponse::HTTP_NOT_FOUND);
        };

        return new ProdutoApiResource($produto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (!$this->service->findOne($id)) {
            return response()->json([
                'error' => 'Not Found',
            ], HttpResponse::HTTP_NOT_FOUND);
        };

        $this->service->delete($id);

        // 204
        return response()->json([], HttpResponse::HTTP_NO_CONTENT);
    }
}
