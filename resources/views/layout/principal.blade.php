<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}"></script>
    <script src="{{ asset('assets/demo/demo5/base/scripts.bundle.js') }}"></script>
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
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{action('ProdutoController@lista')}}">
                        <i class="fas fa-list"></i> Listagem
                    </a>
                </li>
                <li>
                    <a href="{{action('ProdutoController@novo')}}">
                        <i class="fas fa-plus"></i> Novo
                    </a>
                </li>
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
