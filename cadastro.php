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
        <?php
            include ("menu.php");
        ?>
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