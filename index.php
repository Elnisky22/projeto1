<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto 1</title>
        <meta name="description" content="Projeto 1">
        <meta name="author" content="Leonardo Elnisky">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.mask.js"></script>
    </head>

    <body>
        <form method="get" action="home.php">
            Nome: <input type="text" onkeypress="return validarNaoNumero(event)"/>
            <br><br>
            E-mail: <input type="email"/>
            <br><br>
            Telefone: <input type="text" class="tel-mask"/>
            <br><br><br>
            Assunto: <input type="text"/>
            <br><br>
            Mensagem: <input type="text"/>

            <br><br>
            <input type="submit"/>
        </form>

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