<!DOCTYPE html>

<html lang="es">
    <head>
        <!--Caracteres metas por defectos-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!--Descripcion de la pagina web-->
        <title>Corporation Translog</title>
        <meta name="description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta name="keywords" content="buques, tiempo, vieje, calculadora, barcos, lanchas, transporte, logistica, Internacional, mar, atlantico, pacifico, navegar, puertos, envios, container, maritimo, entrega, embarcaciones, carga, muelle">

        <!--Descripcion de compartir en Facebook-->
        <meta property="og:title" content="Corporation Translog">
        <meta property="og:image" content="./image/Logo.png">
        <meta property="og:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        
        <!--Descripcion de compartir en Twitter-->
        <meta property="twitter:title" content="Corporation Translog">
        <meta property="twitter:image" content="./image/Logo.png">
        <meta property="twitter:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional"> 

        <!--Link de iconos de la pagina web-->
        <link rel="apple-touch-icon" sizes="180x180" href="./image/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon-16x16.png">
        <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">

        
        <!--Autor-->
        <meta name="author" content="Nestor Daniel">
        <meta rel="canonical" href="https://ndsmart.000webhostapp.com/">
        <meta name="robots" content="NOODP,NOYDIR">

        <!--Styles-->
        <link rel="stylesheet" href="./css/styles.css">
        <style>
            footer{
                position: fixed;
                width: 100%;
                bottom: 0;
            }

            @media only screen and (max-width: 825px) {
                footer{
                    position: static;
                    
                }
                .agradecer{
                    padding-top: 100px !important;

                }
                .content-agradecer{
                    h1{
                        font-size: 28px;
                    }
                    p{
                        font-size: 15px;
                    }
                }
            }
        </style>

        <!--Base de iconos-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://kit.fontawesome.com">
        <script src="https://kit.fontawesome.com/8f34396e62.js" crossorigin="anonymous"></script>

        <!--JavaScripts-->
        <script defer src="./js/index.js"></script>
    </head>
    <body>
        <!------------------  Cabezera de pagina ------------------>
        <?php require_once "./php/menu.php"?>

        <!------------------contenido de pagina ------------------>
        <main style="">
            <div class="agradecer">
                <div class="content-agradecer">
                    <h1>Gracias por contactarnos</h1>
                    <p>En breves nos ponemos en contacto, muchas gracias.</p>
                    <div class="content-button">
                        <a href="./">Volver Atras</a>
                    </div>
                </div>
                
            </div>
        </main>

        <!------------------ Pies de pagina  ------------------>
        <?php require_once "./php/footer.php"?>
        
    </body>
</html>