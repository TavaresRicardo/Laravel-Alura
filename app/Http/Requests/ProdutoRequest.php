<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nomeproduto' => 'required|min:3',
            'valor' => 'required|numeric',
            'descricao' => 'required|max:255',
            'tamanho' => 'required|max:100',
            'quantidade' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return[
            'nomeproduto.required' => 'O nome é obrigatório.',
            'valor.required' => 'O valor é obrigatório.',
            'descricao.required' => 'A descriço é obrigatória.',
            'tamanho.required' => 'O tamanho é obrigatório.',
            'quantidade.required' => 'A quantidade é obrigatória.',
        ];
    }
}
