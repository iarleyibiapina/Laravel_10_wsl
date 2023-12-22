<?php

namespace App\Repositories;

use App\Models\produto;
use App\DTO\CreateProdutoDTO;
use App\DTO\UpdateProdutoDTO;
use App\Repositories\ProdutoRepositoryInterface;
use stdClass;


class ProdutoEloquentORM implements ProdutoRepositoryInterface
{
    public function __construct(
        protected produto $model,
    ){

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