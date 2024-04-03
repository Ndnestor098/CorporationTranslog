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
        <title>Servicios - Corporation Translog</title>
        <meta name="description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta name="keywords" content="buques, tiempo, vieje, calculadora, barcos, lanchas, transporte, logistica, Internacional, mar, atlantico, pacifico, navegar, puertos, envios, container, maritimo, entrega, embarcaciones, carga, muelle">

        <!--Descripcion de compartir en Facebook-->
        <meta property="og:title" content="Servicios - Corporation Translog">
        <meta property="og:image" content="./image/Logo.png">
        <meta property="og:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        
        <!--Descripcion de compartir en Twitter-->
        <meta property="twitter:title" content="Servicios - Corporation Translog">
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
            <div class="imagen-principal portada-servicio">
                <div>
                    <h1>Servicios</h1>
                    <p>Marcamos la diferencia aportando soluciones</p>
                </div>
            </div>

            <!------------------contenido de informacion about - 1 ------------------>
            <div class="contenido-servicios">
                <div class="img-service-1 imgServices"></div>
                <div class="areatext-servicios">
                    <p class="title-areatext">Logística & Transporte de Carga</p>
                    <p class="info-areatext">Contamos con un equipo multidisciplinario para satisfacer las necesidades de nuestros clientes.</p>
                    <a href="./logística-transporte-carga.php" class="button-service">Saber mas</a>
                </div>
            </div>

            <!------------------contenido de informacion about - 2 ------------------>
            <div class="contenido-servicios" style="flex-direction: row-reverse;">
                <div class="img-service-2 imgServices"></div>
                <div class="areatext-servicios">
                    <p class="title-areatext">Reparación & Mantenimiento Naval</p>
                    <p class="info-areatext">Nuestro equipo de Ingenieros esta especializado para atender sus necesidades en el area naval.</p>
                    <a href="./reparacion-mantenimiento.php" class="button-service">Saber mas</a>
                </div>
            </div>

            <!------------------contenido de informacion about - 3 ------------------>
            <div class="contenido-servicios">
                <div class="img-service-3 imgServices"></div>
                <div class="areatext-servicios">
                    <p class="title-areatext">Trader Internacional</p>
                    <p class="info-areatext">Somos especialistas en importaciones, exportaciones, garantizando satisfacciones en nuestros clientes.</p>
                    <a href="./trade-international.php" class="button-service">Saber mas</a>
                </div>
            </div>

            <div class="sobre-nosotros">
                <div class="content-SN">
                    <!-- <h2>Direccion General</h2>
                    <div class="espacio-logo">
                        <a href="/"><img class="Logo" src="image/Logo.png" alt="" style="width: 150px;"></a>
                    </div>
                    <p>En Corporation Translog, dedicamos el tiempo necesario para conocerle y comprender los requerimientos de su negocio. Esto nos permite aplicar nuestra experiencia para llevar su carga a cualquier parte del mundo y ayudarle a hacer crecer su negocio. Nosotros ofrecemos soluciones integrales para transportar su carga.</p> -->
                    
                    <p>En Corporation Translog, dedicamos el tiempo necesario para conocerle y comprender los requerimientos de su negocio. Esto nos permite aplicar nuestra experiencia para llevar su carga a cualquier parte del mundo y ayudarle a hacer crecer su negocio. Nosotros ofrecemos soluciones integrales para transportar su carga.</p>
                    <h2>Direccion General</h2>
                    <div>
                        <a href="/"><img class="Logo" src="image/Logo.png" alt="" style="width: 150px;"></a>
                    </div>
                </div>
            </div>
        </main>

        <!------------------ Pies de pagina  ------------------>
        <?php require_once "./php/footer.php"?>

    </body>
</html>
