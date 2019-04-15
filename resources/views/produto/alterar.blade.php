@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/produtos/alterar/{{ $p->id }}" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nome" value="{{ $p->nome }}" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Valor </label>
                <input name="valor" value="{{ $p->valor }}" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Quantidade </label>
                <input name="quantidade" value="{{ $p->quantidade }}" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Tamanho </label>
                <input name="tamanho" value="{{ $p->tamanho }}" class="form-control"/>
            </div>
            <div class="form-group">
                <label> Descrição </label>
                <input name="descricao" value="{{ $p->descricao }}" class="form-control"/>
            </div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/produtos" class="btn btn-secondary bnt-sm"> Cancelar </a>
        </form>
    </div>
@stop
