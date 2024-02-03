<?php

namespace App\DTO\Produtos;

use App\ENUM\ProductStatusEnum;
use App\Http\Requests\CreateEditProduto;

class UpdateProdutoDTO
{
    public function __construct(
        public string $id,
        public string $assunto,
        public ProductStatusEnum $status,
        public string $descricao,
    ) {
    }

    public static function makeFromRequest(CreateEditProduto $request, string $id = null): self
    {
        return new self(
            $request->id,
            $request->assunto,
            ProductStatusEnum::A,
            $request->descricao,
        );
    }
}
