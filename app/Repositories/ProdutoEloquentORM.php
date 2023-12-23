<?php

namespace App\Repositories;

use stdClass;
use App\Models\produto;
use App\DTO\{CreateProdutoDTO, UpdateProdutoDTO};
use App\Repositories\{PaginationInterface, ProdutoRepositoryInterface};


class ProdutoEloquentORM implements ProdutoRepositoryInterface
{
    public function __construct(
        protected produto $model,
    ){

    }

    public function paginate(int $page = 1,  int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $result = $this->model
        ->where(function($query) use ($filter){
            if($filter){
                $query->where('assunto', $filter);
                $query->orWhere('descricao', 'like',  "%{$filter}%");
            }
        })
        // primeiro parametro o total de paginas, segundo quais colunas é para trazer * = todas, nome do parametro, qual pagina 
        ->paginate($totalPerPage, ['*'], 'page', $page);

        // com paginate, dd deve retornar LenthAwarePaginator
        dd($result->toArray());
        }
    public function getAll(String $filter = null): array
    {
        return $this->model
                    ->where(function($query) use ($filter){
                        if($filter){
                            $query->where('assunto', $filter);
                            $query->orWhere('descricao', 'like',  "%{$filter}%");
                        }
                    })
                    ->get()
                    ->toArray();
    }
    public function findOne(String $id): stdClass | null
    {
        $produto = $this->model->find($id);
        if(!$produto){
            return null;
        }
        return (object) $produto->toArray();
        
    }
    public function delete(String $id): void{
        $this->model->findOrFail($id)->delete();
    }
    public function new(CreateProdutoDTO $dto): stdClass
    {
        $produto = $this->model->create(
            (array) $dto
        );

        return (object) $produto->toArray();
    }
    public function update(UpdateProdutoDTO $dto): stdClass | null
    {
        if(!$produto = $this->model->find($dto->id)){
            return null;
        }

        $produto->update(
            (array) $dto
        );

        return (object) $produto->toArray();
    }
}