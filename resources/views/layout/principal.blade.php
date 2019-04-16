<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}"></script>
    <script src="{{ asset('assets/demo/demo5/base/scripts.bundle.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
            integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos"> <i class="fas fa-home"></i> Estoque Laravel</a>

                @if (Auth::guest())

                @else
                    <p>
                        <b>Usuário:</b> {{ Auth::user()->name }}
                    </p>
                @endif

            </div>

            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li>
                        <a href="/login">
                            <i class="fas fa-sign-in-alt"></i> Entrar
                        </a>
                    </li>
                    <li>
                        <a href="/registrar">
                            <i class="fas fa-registered"></i> Registrar
                        </a>
                    </li>
                @else
{{--                    <li>--}}
{{--                        <a href='#'>--}}
{{--                            <b>Usuário:</b> {{ Auth::user()->name }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li>
                        <a href="{{action('ProdutoController@lista')}}">
                            <i class="fas fa-list"></i> Listagem de produtos
                        </a>
                    </li>
                    <li>
                        <a href="{{action('ProdutoController@novo')}}">
                            <i class="fas fa-plus"></i> Novo produto
                        </a>
                    </li>
                    <li>
                        <a href="{{action('CategoriaController@novo')}}">
                            <i class="fas fa-plus"></i> Nova categoria
                        </a>
                    </li>
                    <li>
                        <a href='/logout'>
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    </li>
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle"--}}
{{--                           data-toggle="dropdown" role="button"--}}
{{--                           aria-expanded="false">--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                            <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                                <a href="{{action('ProdutoController@lista')}}">--}}
{{--                                    <i class="fas fa-list"></i> Listagem--}}
{{--                                </a>--}}
{{--                        </ul>--}}
{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                                <a href="{{action('ProdutoController@novo')}}">--}}
{{--                                    <i class="fas fa-plus"></i> Novo--}}
{{--                                </a>--}}
{{--                        </ul>--}}
{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                                <a href="/auth/logout">--}}
{{--                                    <i class="fas fa-sign-out-alt"></i>Logout--}}
{{--                                </a>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                @endif
            </ul>

        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <p>© Livro de Laravel do Alura.</p>
    </footer>

</div>
</body>
</html>
