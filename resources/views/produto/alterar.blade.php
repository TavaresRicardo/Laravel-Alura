@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/produtos/alterar/{{ $p->id }}" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nome" value="{{ $p->nome }}" class="form-control  {{ $errors->has('nome') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('nome'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Valor </label>
                <input name="valor" value="{{ $p->valor }}" class="form-control  {{ $errors->has('valor') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('valor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valor') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Quantidade </label>
                <input name="quantidade" value="{{ $p->quantidade }}" class="form-control  {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('quantidade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantidade') }}
                    </div>
                @endif
            </div>

{{--            <div class="form-group">--}}
{{--                <label> Categoria </label>--}}
{{--                <select name="categoria_id" class="form-control" >--}}

{{--                    @foreach($categorias as $c)--}}
{{--                        <option value="{{ $c->id }}">{{ $c->nome }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}

            <div class="form-group">
                <label> Categoria </label>
                <select name="categoria_id" class="form-control  {{ $errors->has('categoria_id') ? 'is-invalid' : '' }}" value="{{ $p->categoria_id }}">
                    <option value="{{ $p->categoria_id }}" selected> {{ $p->categoria->nome }} </option>
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
                <input name="tamanho" value="{{ $p->tamanho }}" class="form-control  {{ $errors->has('tamanho') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('tamanho'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tamanho') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Descrição </label>
                <input name="descricao" value="{{ $p->descricao }}" class="form-control  {{ $errors->has('descricao') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('descricao'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descricao') }}
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/produtos" class="btn btn-secondary bnt-sm"> Cancelar </a>
        </form>
    </div>
@stop
