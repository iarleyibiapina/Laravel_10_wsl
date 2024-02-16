<?php

namespace App\Http\Requests;

// importar
use Illuminate\Validation\Rule;
//
use Illuminate\Foundation\Http\FormRequest;

class CreateContato extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // geral
        $rules = [
            'contato' => [
                'min:4',
                'max:8',
                'numeric',
                'required'
            ]
        ];
        return $rules;
    }

    public function messages(): array
    {
        $rules = [
            'contato.required' => 'Um contato é necessario',
            'contato.min' => 'Mínimo de 4 caracteres',
            'contato.max' => 'Máximo de 8 caracteres',
            'contato.numeric' => 'Deve ser un numero',
        ];

        return $rules;
    }
}
