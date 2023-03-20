<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
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
            <h1> Cadastro </h1>
            <form action="dados.php" method="get">
                <label> Nome: </label>
                <input type="text" name="nome"/><br/><br/>

                <label> Data de Nascimento: </label>
                <input type="text" name="data"/><br/><br/>

                <label> CPF: </label>
                <input type="text" name="cpf"/><br/><br/>

                <label> Telefone: </label>
                <input type="text" name="telefone"/><br/><br/>

                <label> E-mail: </label>
                <input type="text" name="email"/><br/><br/>

                <label> Endereço: </label>
                <input type="text" name="endereco"/><br/><br/>

                <label> Cidade: </label>
                <input type="text" name="cidade"/><br/><br/>

                <label> Estado: </label>
                <input type="text" name="estado"/><br/><br/>

                <label> País: </label>
                <input type="text" name="pais"/><br/><br/>

                <div class="botao">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
                </div>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>