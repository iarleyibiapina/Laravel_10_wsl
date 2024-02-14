<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        // carbon é uma lib para formatar datas
        // retornar padraos de retorno

        // é possivel definir como vai ser o retorno, aplicar logica para tratar string, retornar tudo em minusculo... e outros formatos
        return [
            'id' => $this->id,
            'novoNomeAssunto' => $this->assunto,
            'novoNomeConteudo' => $this->descricao,
            'criadoEm' => $this->created_at,
            'atualizadoEm' => Carbon::make($this->updated_at)->format('Y-m-d'),
        ];
    }
}
