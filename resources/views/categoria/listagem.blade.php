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
                <th scope="col">Detalhes</th>
                <th scope="col">  Editar</th>
                <th scope="col"> Excluir</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach( $produtos as $p )
                    <tr>
                        <th  scope="row"> {{ $i  }} </th>
                        <td> {{$p->nome }} </td>
                        <td>
                             <a href="/categorias/mostra/{{$p->id}}">
                                 <i class="fas fa-search"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/categorias/alterar/{{$p->id}}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/categorias/remove/{{$p->id}}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i = $i + 1; ?>
                @endforeach

            </tbody>
        </table>

    @endif
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> A categoria {{ old('nome') }} foi adicionado.
        </div>
    @endif
@stop
