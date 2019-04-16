@extends('layout.principal')

@section('conteudo')
    <div class="container">

        <h1>Detalhes do produto: {{$p->nome}}  </h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <td>  <b>{{$p->nome}}</b></td>
                <td> <b>Informação</b> </td>
            </thead>
            <tbody>
                <tr>
                    <td><b>Valor:</b> </td> <td>R$ {{ $p->valor }} </td>
                </tr>
                <td><b>Categoria:</b> </td> <td> {{ $p->categoria->nome }} </td>
                </tr>
                <tr>
                    <td> <b>Descrição:</b> </td> <td>{{ $p->descricao }} </td>
                </tr>
                <tr>
                    <td><b>Quantidade em estoque:</b> </td> <td>{{ $p->quantidade }} </td>
                </tr>
                <tr>
                    <td><b>Tamanho:</b> </td> <td>{{ $p->tamanho }} </td>
                </tr>
            </tbody>
        </table>

    </div>
@stop

