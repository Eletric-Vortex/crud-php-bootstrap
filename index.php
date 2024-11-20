<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Aqui o href chama o arquivo diretamente -->
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- O href passa um parametro na URL que leva pro switch em PHP pra fazer um tipo de ROUTER -->
                        <a class="nav-link" href="?page=novo">Novo Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="?page=listar">Listar Usuario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include __DIR__ ."/config.php";
                    switch ($_REQUEST["page"]) {
                    case 'novo':
                        // USAR __DIR__ para pegar o caminho do arquivo
                        // No windows apenas / funciona, no linux precisa do DIR
                        include __DIR__ .'/novo-usuario.php';
                        break;

                    case 'listar':
                        include __DIR__.'/listar-usuario.php';
                        break;

                    case 'salvar':
                        include __DIR__.'/salvar-usuario.php';
                        break;

                    case 'editar':
                        include __DIR__.'/editar-usuario.php';
                        break;

                    default:
                        echo '<h1> Seja Bem Vindo! </h1>';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>