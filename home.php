<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto 1</title>
        <meta name="description" content="Projeto 1">
        <meta name="author" content="Leonardo Elnisky">

        <link rel="stylesheet" href="util.css"/>
    </head>

    <body>
        <div class="flex-wrap menu" style="margin-top:100px">
            <div style="background-color:lightblue">
                <h1><b>Formulário do Contato</b></h1>
                <hr>
                <p><b>Nome:</b> <?php echo $_POST["nome"] ?></p>
                <p><b>Email:</b> <?php echo $_POST["email"]; ?></p>
                <p><b>Telefone:</b> <?php echo $_POST["tel"]; ?></p>
                <br>
                <p><b>Assunto:</b> <?php echo $_POST["assunto"]; ?></p>
                <p><b>Mensagem:</b> <?php echo $_POST["msg"]; ?></p>
            </div>
        </div>
    </body>
</html>