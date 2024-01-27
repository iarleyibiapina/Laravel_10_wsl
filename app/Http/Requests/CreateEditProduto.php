<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateEditProduto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // trocar para true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // regras para validação de formularios create ou edit
        //ja existem inumeras validações pre definidas
        // parametros, olhar na documentação
        // 'assunto' => 'required | min:3 | max: 255 | unique:produtos',
        //  melhor assim em array
        // 'descricao' => [
        //     'required',
        //     'min:3',
        //     'max: 500',
        // ],

        // alterando para melhor validação de dados no update
        $rules = [
            // nova atualização, validaão precisa ser em forma de array
            // 'assunto' => [
            //     'required | min:3 | max: 255 | unique:produtos',
            // ],  
            'assunto' => [
                'required',
                'min:3',
                'max: 255',
                'unique:produtos',
            ],
            'descricao' => [
                'required',
                'min:3',
                'max: 500',
            ],
        ];

        // caso update
        if ($this->method() === 'PUT') {
            //criando exceção
            $rules['assunto'] = [
                'required',
                'min:3',
                'max:255',
                // 1. 'unique:produto, assunto, {$this->id}, id',
                Rule::unique("produtos")->ignore($this->id),
                // segunda forma
                // sendo unico em produtos, caso o id seja igual no update, ignorar ele
            ];
        };

        return $rules;
    }

    public function messages(): array
    {
        $rules = [
            'assunto.required' => 'Um titlo é necessario',
            'assunto.unique' => 'Este titulo já existe',
            'descricao.required' => 'Um titlo é necessario',
        ];

        return $rules;
    }
}
