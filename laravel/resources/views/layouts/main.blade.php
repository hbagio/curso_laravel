<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Fontes do Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- CSS Bootstrap --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    {{-- CSS da Aplicação --}}
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-collapse bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" alt="..." height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/listaEvents" class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link" href="#">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/login" class="nav-link" href="#">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/usuCadastro" class="nav-link" href="#">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/sobre" class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/pessoa" class="nav-link" href="#">Pessoa</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>


    {{-- Carrega o conteudo dinamicamente --}}

     {{-- Recebe mensagem vinda por parametro --}}
    <main>
        <div class="containerfluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif

                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <p>Bagio Projetos &copy; 2022</p>
    </footer>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>


</body>

</html>
