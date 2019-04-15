@extends('layout.principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>
    @if(empty($produtos))

        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>

    @else

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <td> ID </td>
                <td> Nome </td>
                <td> Descrição </td>
                <td> Tamanho </td>
                <td> Valor </td>
                <td> Quantidade </td>
                <td><i class="fas fa-search"></i></td>
                <td><i class="fas fa-edit"></i></td>
                <td> <i class="fas fa-trash-alt"></i></td>
            </thead>
            <tbody>
                @foreach( $produtos as $p )
                    <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
{{--                    <tr class="danger">--}}
                        <td> {{$p->id }} </td>
                        <td> {{$p->nome }} </td>
                        <td> {{ $p->descricao }} </td>
                        <td> {{ $p->tamanho }} </td>
                        <td> {{ $p->valor }} </td>
                        <td> {{ $p->quantidade }} </td>
                        <td>
                             <a href="/produtos/mostra/{{$p->id}}">
                                 <i class="fas fa-search"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/produtos/alterar/{{$p->id}}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/produtos/remove/{{$p->id}}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    @endif
    <h4>
      <span class="label label-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
        </div>
    @endif
@stop
