<?php

namespace App\Http\Requests;

// importar
use Illuminate\Validation\Rule;
//
use Illuminate\Foundation\Http\FormRequest;

class CreateEditUsuario extends FormRequest
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
                'unique:usuarios',
                'min:4',
                'max:8',
                ]
            ];
        // para update
            if($this->method() === 'PUT'){
                $rules['contato'] = [
                    'min:4',
                    'max:8',
                    Rule::unique('usuarios')->ignore($this->id),
                ];
            };
        return $rules;
    }
}
