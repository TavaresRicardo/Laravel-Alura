@extends('layout.principal')

@section('conteudo')
    <div class="container">

        <h1>Detalhes da categoria: {{$c->nome}}  </h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <td>  <b>{{$c->nome}}</b></td>
                <td> <b>Informação</b> </td>
            </thead>
            <tbody>
                <tr>
                    <td><b>Categoria:</b> </td> <td> {{ $c->nome }} </td>
                </tr>

            </tbody>
        </table>

    </div>
@stop

