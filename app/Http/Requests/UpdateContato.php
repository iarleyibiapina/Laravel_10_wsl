<?php

namespace App\Http\Requests;

// importar
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContato extends FormRequest
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
        // para update
        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $id = $this->produto ?? $this->id;
            $rules['contato'] = [
                'min_digits:4',
                'max_digits:8',
                'numeric',
                'unique:contatos',
                Rule::unique('contatos')->ignore($this->id),
            ];
        };

        return $rules;
    }

    public function messages(): array
    {
        $rules = [
            'contato.required'    => 'Um contato é necessario',
            'contato.min_digits'  => 'Mínimo de :min caracteres',
            'contato.max_digits'  => 'Máximo de :max caracteres',
            'contato.numeric'     => 'Deve ser un numero',
            'contato.unique'      => 'Contato já existente',
        ];

        return $rules;
    }
}
