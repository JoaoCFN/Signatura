<?php 
    require_once "../libs/config.php";
    if (isset($_SESSION['admin']) AND basename($_SERVER['PHP_SELF']) == "login.php") {
        header('location: index.php');
    }elseif (!isset($_SESSION['admin']) AND basename($_SERVER['PHP_SELF']) != "login.php") {
        header('location: login.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signatuda DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
<script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
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
<body>