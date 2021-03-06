<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <title>Bentley Juruena</title> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <script type="text/javascript" src="../bootstrap/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="../bootstrap/js/jquery.mask.js"></script>
    <script type="text/javascript" src="../bootstrap/js/scripts.js"></script>
    <title>Gerencianet</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="#">Carousel</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <span class="brand-text font-weight-light">
                            <img height="80" src="https://sistema.bentleybrasil.com.br/img/logo-empresa-br.png">
                        </span>
                        <a class="nav-link {{ Route::current()->getName() === 'bentley.home' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('bentley.home') }}">Home</a>

                        <a class="nav-link {{ Route::current()->getName() === 'bentley.produtos' ? 'active' : '' }}"
                            href="{{ route('bentley.produtos') }}">Detalhes dos Produtos</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')

        <ul>
            <li>
                <a class="nav-link" href="{{ route('bentley.comprar.boleto') }}">Comprar</a>
            </li>

            <li>
                <a class="nav-link" href="{{ route('bentley.comprar.boleto') }}">Boleto</a>
            </li>

            <li>
                <a class="nav-link" href="{{ route('bentley.comprar.cartao') }}">Cart??o de cr??dito</a>
            </li>
        </ul>

        <!-- FOOTER -->
        <footer class="main-footer">
            <div style="padding: 20px 20px 20px 20px;">
                <div class="float-right d-none d-sm-block">
                    <b>Satellite Broadband Networks</b> 1.0-rc
                </div>
                <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io"> Bentley Brasil - Projeto
                        Juruena</a>.</strong> Todos os direitos reservados
            </div>
        </footer>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
