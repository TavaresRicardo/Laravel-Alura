<?php namespace estoque\Http\Controllers;

use estoque\Produtos;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use estoque\Http\Resquests;
use Validator;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = Produtos::all();
        return view('produto.listagem')->withProdutos($produtos);
        //return view('listagem')->with('produtos', array());
    }


    public function mostra($id){
        $p = Produtos::find($id);
        return view ('produto.detalhes', compact('p'));
    }

    public function alterar($id){
        $p = Produtos::find($id);
        return view ('produto.alterar', compact('p'));
    }

    public function remove($id){
        $p = Produtos::find($id);
        $p->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo(){
        return view('produto.formulario');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adiciona(ProdutoRequest $request){

//        $regras = [
//            'nomeproduto' => 'required',
//            'valor' => 'required',
//            'descricao' => 'required',
//            'tamanho' => 'required',
//            'quantidade' => 'required',
//        ];
//        $mensagens = [
//            'nomeproduto.required' => 'O nome é obrigatório.',
//            'valor.required' => 'O valor é obrigatório.',
//            'descricao.required' => 'A descriço é obrigatória.',
//            'tamanho.required' => 'O tamanho é obrigatório.',
//            'quantidade.required' => 'A quantidade é obrigatória.',
//        ];
//        //dd($mensagens);
//        $request->validate($regras, $mensagens);



        $produto = new Produtos();
        //pegando as informações do formulario
        $produto->nome = $request->nomeproduto;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->tamanho = $request->tamanho;
        $produto->descricao = $request->descricao;
        //salvando no BD
        $produto->save();

//        $params = Request::all();
//        $produto = new Produtos($params);
//        //salvando no BD
//        $produto->save();

        //return redirect('/produtos')->withInput();
        //return ['status'=>true,"conteudos"=>$produto];
        //return view('produto.adicionado')->with('nome', $produto->nome);

        return redirect()->action('ProdutoController@lista')->withInput();
    }

    public function update(ProdutoRequest $request, $id){
        $produto = Produtos::find($id);

        if( isset($produto) ) {
            //pegando as informações do formulario
            $produto->nome = $request->nomeproduto;
            $produto->valor = $request->valor;
            $produto->quantidade = $request->quantidade;
            $produto->tamanho = $request->tamanho;
            $produto->descricao = $request->descricao;
            //salvando no BD
            $produto->save();
            return redirect()->action('ProdutoController@lista')->withInput();
        }
        else{
            return redirect()->action('ProdutoController@lista');
        }
    }

    public function listaJson(){
        $produtos = Produtos::all();
        return $produtos;
    }

    public function listaJson2(){
        $produtos = Produtos::all();
        return response()->json($produtos);
        //$produtos->toJson();
    }
}
