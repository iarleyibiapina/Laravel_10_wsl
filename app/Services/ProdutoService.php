<?php

namespace App\Services;

use App\DTO\CreateProdutoDTO;
use App\DTO\UpdateProdutoDTO;
use App\Repositories\PaginationInterface;
use App\Repositories\ProdutoRepositoryInterface;
use stdClass;

class ProdutoService
{
    // protected $repository;

    public function __construct(
        protected ProdutoRepositoryInterface $repository,
    ) {
    }
    //elo entre repositorio e controller retornando dados
    // $filter = null, filtro sendo opcional
    public function paginate(
        int $page = 1,
        int $totalPerPage = 15,
        string $filter = null,
    ): PaginationInterface {
        return $this->repository->paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter,
        );
    }


    // : array retornar um array
    public function getAll(string $filter = null): array
    {
        // pegando os dados
        return $this->repository->getAll($filter);
    }
    // retornar stdClass ou nulo
    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }
    // retorna nada :void()
    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
    // create, recebendo parametros
    public function new(CreateProdutoDTO $dto): stdClass
    {
        // pode ser new() ou store()
        // return $this->repository->new($assunto, $status, $descricao); alterado apos criado DTO
        return $this->repository->new($dto);
    }

    public function update(UpdateProdutoDTO $dto): stdClass|null
    {
        // pode ser new() ou store()
        return $this->repository->update($dto);
    }
}
