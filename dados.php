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
         <?php
            include ("menu.php");
        ?>
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