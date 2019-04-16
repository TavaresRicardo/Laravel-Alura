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
            <tr>
                <th scope="col"> # </th>
                <th scope="col"> Nome </th>
                <th scope="col"> Categoria </th>
                <th scope="col"> Descrição </th>
                <th scope="col"> Tamanho </th>
                <th scope="col"> Valor </th>
                <th scope="col"> Quant. </th>
{{--                <th scope="col"><i class="fas fa-search"></i></th>--}}
{{--                <th scope="col"><i class="fas fa-edit"></i></th>--}}
{{--                <th scope="col"> <i class="fas fa-trash-alt"></i></th>--}}
                <th scope="col">Detalhes</th>
                <th scope="col">  Editar</th>
                <th scope="col"> Excluir</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach( $produtos as $p )
                    <tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
{{--                    <tr class="danger">--}}
                        <th  scope="row"> {{ $i  }} </th>
                        <td> {{$p->nome }} </td>
                        <td> {{ isset($p->categoria)? $p->categoria->nome : " " }} </td>
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
                    <?php $i = $i + 1; ?>


                @endforeach

            </tbody>
        </table>

    @endif
    <h4 class="pull-right">
      <span class="badge badge-danger">
        Um ou menos itens no estoque
      </span>
    </h4>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
        </div>
    @endif
@stop
