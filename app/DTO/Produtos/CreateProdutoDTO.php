<?php

namespace App\DTO\Produtos;

use App\ENUM\ProductStatusEnum;
use App\Http\Requests\CreateEditProduto;

class CreateProdutoDTO
{
    // oque eu preciso para cadastrar um produto?
    // posso declarar direto aqui
    // ou em uma public function diferente
    public function __construct(
        // define os tipos de dados
        public string $assunto,
        public ProductStatusEnum $status,
        public string $descricao,
    ) {
    }
    // primeiro, no service ele recebe o DTO como parametro retirando os antigos atributos,
    // o 'create' no service, recebe 'create' do DTO
    // agora alterar em service o parametro,
    public static function makeFromRequest(CreateEditProduto $request): self
    {
        return new self(
            $request->assunto,
            ProductStatusEnum::A,
            $request->descricao,
        );
    }
}
