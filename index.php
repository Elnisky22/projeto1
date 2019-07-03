<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto 1</title>
        <meta name="description" content="Projeto 1">
        <meta name="author" content="Leonardo Elnisky">

        <link rel="stylesheet" href="util.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.mask.js"></script>
    </head>

    <body>
        <div class="flex-wrap" style="margin-top:100px">
            <form method="POST" action="home.php">
                Nome:<br>
                <input type="text" name="nome" minlength="3" maxlength="50" onkeypress="return validarNaoNumero(event)" required/> *<br><br>
                E-mail:<br>
                <input type="email" name="email" maxlength="50" required/> *<br><br>
                Telefone:<br>
                <input type="text" name="tel" minlength="15" maxlength="15" class="tel-mask" required/> *
                <hr>
                Assunto:<br>
                <input type="text" name="assunto" minlength="3" maxlength="50" required/> *
                <br><br>
                Mensagem:<br>
                <textarea name="msg" rows="4" cols="25" maxlength="200" required></textarea> *

                <br><br>
                <input type="submit" value="Enviar" class="customButtons"/>
            </form>
        </div>

        <script type="text/javascript">
            function validarNaoNumero(evt){
            	var tecla = (evt.which) ? evt.which : event.keyCode;
			    if (tecla > 31 && (tecla < 48 || tecla > 57) || tecla == 8) return true;
	            return false;
            }
        </script>
        <script>
		    $(document).ready(function(){
			    $('.tel-mask').mask('(99) 99999-9999');
		    });
	    </script>
    </body>
</html>