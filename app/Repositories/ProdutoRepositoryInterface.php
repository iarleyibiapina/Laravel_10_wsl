<?php

namespace App\Repositories;

use stdClass;
use App\DTO\CreateProdutoDTO;
use App\DTO\UpdateProdutoDTO;
use App\Repositories\PaginationInterface;

interface ProdutoRepositoryInterface
{
    // alguns parametros opcionais, o padrao do paginate ja é 15, preciso retornar array em formato stdClass, para isso crio uma interface
    public function paginate(int $page = 1,  int $totalPerPage = 15, string $filter = null): PaginationInterface;
    public function getAll(String $filter = null): array;
    public function findOne(String $id): stdClass | null;
    public function delete(String $id): void;
    public function new(CreateProdutoDTO $dto): stdClass;
    public function update(UpdateProdutoDTO $dto): stdClass | null;
    
}