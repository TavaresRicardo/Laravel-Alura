@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/categorias/adiciona" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome da Categoria</label>
                <input name="nome" class="form-control  {{ $errors->has('nome') ? 'is-invalid' : '' }}" value="{{ old('nome') }}"/>
                @if( $errors->has('nome'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </div>
@stop
