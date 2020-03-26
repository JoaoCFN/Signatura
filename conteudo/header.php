<?php require_once "libs/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
	    <!-- Meta tags Obrigatórias -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="estilo.css">
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font awesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- FONTE RALEWAY -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500i,700,800&display=swap" rel="stylesheet"> 
		<!-- FONTE MONTSERRAT -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 
        <!-- FAVICON -->
        <link rel="shortcut icon" href="midia/favicon.jpg" />
	    <title>Signatura</title>
	    <script type="text/javascript"> 
            function mostraDialogo(mensagem, tipo, tempo){
            
                if($("#message").is(":visible")){
                    return false;
                }

                if(!tempo){
                    var tempo = 3000;
                }

                if(!tipo){
                    var tipo = "info";
                }

                var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: 60%; padding-top: 10px; z-index: 2147483648";
                var cssInner = "margin: 0 auto;  box-shadow: 1px 1px 5px black;";

                var dialogo = "";
                dialogo += '<div id="message" style="'+cssMessage+'">';
                dialogo += '    <div class="alert alert-'+tipo+' alert-dismissable" style="'+cssInner+'">';
                dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
                dialogo +=          mensagem;
                dialogo += '    </div>';
                dialogo += '</div>';

                $("body").append(dialogo);
                $("#message").hide();
                $("#message").fadeIn(200);

                setTimeout(function() {
                    $('#message').fadeOut(300, function(){
                        $(this).remove();
                    });
                }, tempo);

            } 
        </script>
	</head>