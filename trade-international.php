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
        <title>Trade Internacional</title>
        <meta name="description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta name="keywords" content="buques, tiempo, vieje, calculadora, barcos, lanchas, transporte, logistica, Internacional, mar, atlantico, pacifico, navegar, puertos, envios, container, maritimo, entrega, embarcaciones, carga, muelle">

        
        <!--Descripcion de compartir en Instagram-->
        <meta property="og:title" content="Corporation Translog">
        <meta property="og:image" content="./image/Logo.png">
        <meta property="og:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta property="og:url" content="http://corporationtranslog.infinityfreeapp.com/trade-international.php">
        
        <!--Descripcion de compartir en Twitter-->
        <meta property="twitter:title" content="Corporation Translog">
        <meta property="twitter:image" content="./image/Logo.png">
        <meta property="twitter:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional"> 
        <meta property="twitter:url" content="http://corporationtranslog.infinityfreeapp.com/trade-international.php">

        <!--Link de iconos de la pagina web-->
        <link rel="apple-touch-icon" sizes="180x180" href="./image/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon-16x16.png">
        <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">

        
        <!--Autor-->
        <meta name="author" content="Nestor Daniel">
        <meta rel="canonical" href="http://corporationtranslog.infinityfreeapp.com/trade-international.php">
        <meta name="robots" content="NOODP,NOYDIR">

        <!--Styles-->
        <link rel="stylesheet" href="./css/styles.css">

        <!--Base de iconos-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://kit.fontawesome.com">
        <script src="https://kit.fontawesome.com/8f34396e62.js" crossorigin="anonymous"></script>

        <!--JavaScripts-->
        <script defer src="js/index.js"></script>
    </head>
    <body>
        <!------------------  Cabezera de pagina ------------------>
        <?php require_once "./php/menu.php"?>

        <!------------------contenido de pagina ------------------>
        <main>
            <!------------------------Portada de pagina web------------------------>
            <div class="imagen-principal portada-trade">
                <div class="contenedor-portada">
                    <h1>Logística & Transporte de Carga</h1>
                </div>
            </div>

            <!-----------------------Contenido de pagina web------------------------>
            <div class="contenido-servicios">
                <div class="img-trade-1 imgServices"></div>
                <div class="areatext-servicios logistica-text">

                <div style="display:flex; align-items: center;gap:15px;">
                        <i class="fa-solid fa-earth-americas"></i>
                        <p class="title-areatext">Importacion e Exportacion</p>
                    </div>

                    <ul class="lista-logistica">
                        <li>Somos especialistas en <strong>importación y exportación.</strong></li>
                        <li>Manejamos diversos mercados: materias primas, químicos, productos semifacturado, metales, entre otros.</li>
                        <li>Contamos con personal capacitado para establecer <strong>relaciones en diferentes sectores.</strong></li>
                        <li>Identificamos proveedores en diferentes países.</li>
                    </ul>
                </div>
            </div>

            <div class="contenido-servicios" style="flex-direction: row-reverse; margin-bottom:10px;">
                <div class="img-trade-2 imgServices"></div>
                <div class="areatext-servicios  logistica-text">
                    <div style="display:flex; align-items: center;gap:15px;">
                        <i class="fa-solid fa-trailer"></i>
                        <p class="title-areatext">Gestion y Aduanas</p>
                    </div>

                    <ul class="lista-logistica">
                        <li><strong>Gestion Aduanera</strong> y de documentación.</li>
                        <li>Distribución y venta de productos.</li>
                        <li>Brindamos Gestion <strong>Logística.</strong></li>
                    </ul>
                </div>
            </div>

            <!-----------------------Parte de Conocer Empresa------------------------>
            <div class="parte-final-about">
                <div class="text-final">
                    <div style="text-align:center;">
                        <p class="title-final">¿Por qué elegirnos?</p>
                        <p class="areatext-final">Porque ofrecemos servicios integrales, respuestas oportunas y soluciones efectivas de acuerdo a su requerimiento.</p>
                        
                    </div>
                    <a href="./contacto.php" class="button" style="margin-top: 30px;">Contactanos</a>
                </div>
            </div>
        </main>

        <!------------------ Pies de pagina  ------------------>
        <?php require_once "./php/footer.php"?>
        
    </body>
</html>