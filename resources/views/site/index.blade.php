{{-- Front-end começa aqui! --}}
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="./site/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>RECTRUTEI</title>
</head>

<body>
    <header class="header">
        <a class="header-logo" href="/">
            <img class="header-png" src=".\site\img\logo1.png" alt="Logo recrutei">
        </a>
        <div class="header-actions">
            <div>
                <button id="btn" class="header-mode"><i class="ph ph-sun mode-icon" id="js-icon"></i></button>
            </div>
            <button class="button"><span class="button-text"><i class="ph ph-sign-out button-icon"></i><a class="hidden" href="{{ route('login')}}">LOGIN</a></span></button>
        </div>
    </header>
    <main>
        <button class="btn-topo" id="main-topo" onclick="voltarAoTopo()"><i class="ph ph-caret-circle-up"></i></button>

        <form class="caixa-pesquisar" action="{{url('/search')}}" method="GET">
            <input class="pesquisar" type="text" name="search" id="js-pesquisar" placeholder="Buscar curso ou aluno...">
            <button class="input-pesquisa" type="submit" onclick="pesquisa()"><i class="ph ph-magnifying-glass"></i></button>
        </form>
        <div class="container">

            @foreach ($alunos as $aluno)

            <div class="card">

                <img class="card-imagem" src="{{url($aluno->imagem) }}" alt="{{ $aluno->nome }}">
                <div class="card-infos">
                    <div class="card-infos-content">
                        <h3 class="card-name">{{ $aluno->nome }}</h3>
                        <p class="card-course">{{ $aluno->curso->curso}}</p>
                    </div>
                    <p class="card-description">{{ $aluno->descricao}}</p>
                </div>

                @if($aluno->contratado)
                <button class="button wide contratado">
                    <p class="event-type">contratado</p>
                </button>

                @else

                <form class="form-contract" action="{{ route('aluno.contratar', $aluno) }}" method="post">
                    @csrf
                    <button class="button wide">
                        <p class="event-type">contratar</p>
                    </button>

                </form>
                @endif
                <!-- <button class="event-type button-submit" type="submit">não contratado</button> -->
                <!-- <button><span class="button-text"><i class="ph ph-user-circle-plus button-icon"></i>Contratar!</span></button> -->
                <!-- <span class="button-text"><i class="ph ph-user-circle-plus button-icon"></i>Contratar!</span> -->

            </div>

            @endforeach
        </div>
    </main>
    <div class="pagination"> {{ $alunos->links() }} </div>

    <footer class="rodape">
        <li><a class="rodape-linkedin rodape-button" href="https://www.linkedin.com/in/allyson-pina-284361213/" target="_blank"><i class="ph ph-linkedin-logo"></i><span class="hidden">Linkedlin</span></a></li>
        <li><a class="rodape-instagram rodape-button" href="https://www.instagram.com/p.allyson/" target="_blanks"><i class="ph ph-instagram-logo"></i><span class="hidden">Instagram</span></a></li>
        <li><a class="rodape-github rodape-button" href="https://github.com/Allyson777" target="_blanks"><i class="ph ph-github-logo"></i><span class="hidden">GitHub</span></a></li>

    </footer>



    <script src="./site/js/app.js"></script>

</body>

</html>