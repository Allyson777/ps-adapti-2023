{{-- Front-end começa aqui! --}}
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./site/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Ps-adapti-2023</title>
</head>

<body>
    <header class="header">
        <h1 class="header-logo">
            <img class="header-png" src=".\site\img\logo-meta-social.png" alt="">
        </h1>
        <div class="header-actions">
            <div>
                <button id="btn" class="header-mode"><i class="ph ph-sun" id="js-icon"></i></button>
            </div>
            <button class="button">ENTRAR/SAIR</button>
        </div>
    </header>
    <div class="caixa-pesquisar">
        <div class="pesquisar">
            <i class="ph ph-magnifying-glass"></i><input placeholder="Buscar..." type="text" class="input-pesquisa">
        </div>
    </div>
    <script src="./site/js/app.js"></script>

</body>

</html>