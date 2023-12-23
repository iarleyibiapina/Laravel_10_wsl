<?php

namespace App\Repositories;

use App\Repositories\ProdutoRepositoryInterface;

interface PaginationInterface
{
    /**
     * @return stdClass[]
     */
    public function items(): array;
    public function totalItems(): int;
    public function isFirstPage(): bool;
    public function isLastPage(): bool;
    public function currentPage(): int;
    public function getNumberNextPage(): int;
    public function getNumberPreviousPage(): int;

}