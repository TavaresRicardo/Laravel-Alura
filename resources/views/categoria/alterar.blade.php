@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/categorias/alterar/{{ $c->id }}" method="POST">
{{--            <input type="hidden" nome="_token" value="{{ csrf_token()  }}" />--}}
            @csrf
            <div class="form-group">
                <label> Nome </label>
                <input name="nome" value="{{ $c->nome }}" class="form-control  {{ $errors->has('nome') ? 'is-invalid' : '' }}"/>
                @if( $errors->has('nome'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/produtos" class="btn btn-secondary bnt-sm"> Cancelar </a>
        </form>
    </div>
@stop
