@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/produtos/adiciona" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nome" class="form-control  {{ $errors->has('nome') ? 'is-invalid' : '' }}" value="{{ old('nome') }}"/>
                @if( $errors->has('nome'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Valor </label>
                <input name="valor" class="form-control  {{ $errors->has('valor') ? 'is-invalid' : '' }}" value="{{ old('valor') }}"/>
                @if( $errors->has('valor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valor') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Quantidade </label>
                <input name="quantidade" class="form-control  {{ $errors->has('quantidade') ? 'is-invalid' : '' }}" value="{{ old('quantidade') }}"/>
                @if( $errors->has('quantidade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantidade') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Categoria </label>
{{--                <input name="categoria_id" class="form-control  {{ $errors->has('categoria_id') ? 'is-invalid' : '' }}" value="{{ old('categoria_id') }}"/>--}}
                <select name="categoria_id" class="form-control"} >
{{--{{ $errors->has('categoria_id') ? 'is-invalid' : '' }}" value="{{ old('categoria_id') }}">--}}
                    @foreach($categorias as $c)
                        <option value="{{ $c->id }}">{{ $c->nome }}</option>
                    @endforeach
                </select>
                @if( $errors->has('categoria_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categoria_id') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Tamanho </label>
                <input name="tamanho" class="form-control  {{ $errors->has('tamanho') ? 'is-invalid' : '' }}" value="{{ old('tamanho') }}"/>
                @if( $errors->has('tamanho'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tamanho') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Descrição </label>
                <input name="descricao" class="form-control  {{ $errors->has('descricao') ? 'is-invalid' : '' }}" value="{{ old('descricao') }}"/>
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
