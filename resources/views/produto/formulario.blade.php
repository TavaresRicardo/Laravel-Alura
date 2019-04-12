@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/produtos/adiciona" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nomeproduto" class="form-control  {{ $errors->has('nomeproduto') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('nomeproduto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomeproduto') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Valor </label>
                <input name="valor" class="form-control  {{ $errors->has('valor') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('valor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valor') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Quantidade </label>
                <input name="quantidade" class="form-control  {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('quantidade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantidade') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Tamanho </label>
                <input name="tamanho" class="form-control  {{ $errors->has('tamanho') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('tamanho'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tamanho') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Descrição </label>
                <input name="descricao" class="form-control  {{ $errors->has('descricao') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('descricao'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descricao') }}
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </div>
@stop
