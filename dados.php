<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Dados recebidos</title>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dados.php">Dados</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <div class="container"></div>
            <h1>Dados recebidos :</h1>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["nome"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["data"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["cpf"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["telefone"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["email"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["endereco"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["cidade"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["estado"]; ?> </p>
            <p><b> O nome recebido foi: <b><?php echo $_GET ["pais"]; ?> </p>
            <a href="cadastro.php">Voltar</a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>