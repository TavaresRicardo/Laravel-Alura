<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:255',
        ];
    }

    public function messages()
    {
        return[
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'Mínimo de 3 caracteres.',
            'nome.max' => 'Máximo de 255 caracteres.',
        ];
    }
}
