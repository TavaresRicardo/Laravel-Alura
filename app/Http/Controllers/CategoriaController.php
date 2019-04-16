<?php namespace estoque\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use estoque\Http\Resquests;
use Validator;
use Auth;

namespace estoque\Http\Controllers;


use estoque\Categoria;
use estoque\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{

    public function lista(){
        $categorias = Categoria::all();
        return view('categoria.listagem')->withProdutos($categorias);
    }


    public function mostra($id){
        $c = Categoria::find($id);
        return view ('categoria.detalhes', compact('c'));
    }

    public function alterar($id){
        $c = Categoria::find($id);
        return view ('categoria.alterar', compact('c'));
    }

    public function remove($id){
        $c = Categoria::find($id);
        $c->delete();
        return redirect()->action('CategoriaController@lista');
    }

    public function novo(){
        return view('categoria.formulario');
    }

    public function adiciona(CategoriaRequest $request){

        Categoria::create($request->all());

        return redirect()->action('CategoriaController@lista')->withInput();
    }

    public function update(CategoriaRequest $request, $id){
        $categoria = Categoria::find($id);

        if( isset($categoria) ) {
            //pegando as informações do formulario
            $categoria->nome = $request->nome;
            //salvando no BD
            $categoria->save();
            return redirect()->action('CategoriaController@lista')->withInput();
        }
        else{
            return redirect()->action('CategoriaController@lista');
        }
    }
}
