<?php

namespace App\Repositories;

use stdClass;
use App\DTO\CreateProdutoDTO;
use App\DTO\UpdateProdutoDTO;

interface ProdutoRepositoryInterface
{
    public function getAll(String $filter = null): array;
    public function findOne(String $id): stdClass | null;
    public function delete(String $id): void;
    public function new(CreateProdutoDTO $dto): stdClass;
    public function update(UpdateProdutoDTO $dto): stdClass | null;
    
}