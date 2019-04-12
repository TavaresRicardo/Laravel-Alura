@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/produtos/adiciona" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nomeproduto" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Valor </label>
                <input name="valor" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Quantidade </label>
                <input name="quantidade" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Descrição </label>
                <input name="descricao" class="form-control"/>
            </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </div>
@stop
