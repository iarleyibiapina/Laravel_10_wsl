<?php

namespace App\DTO;

class CreateProdutoDTO {
    // oque eu preciso para cadastrar um produto?
// posso declarar direto aqui
// ou em uma public function diferente
    public function __construct(
        // define os tipos de dados
        public string $assunto,
        public string $status,
        public string $descricao,
    ){}
    // primeiro, no service ele recebe o DTO como parametro retirando os antigos atributos,
// o 'create' no service, recebe 'create' do DTO
// agora alterar em service o parametro,
    public static function makeFromRequest(CreateProdutoDTO $request): self{
        return new self(
            $request->assunto,
            'ativo',
            $request->descricao,
        );
    }
}