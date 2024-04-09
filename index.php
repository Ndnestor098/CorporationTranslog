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

        <!--Descripcion de compartir en Instagram-->
        <meta property="og:title" content="Corporation Translog">
        <meta property="og:image" content="./image/Logo.png">
        <meta property="og:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta property="og:url" content="http://corporationtranslog.infinityfreeapp.com/">
        
        <!--Descripcion de compartir en Twitter-->
        <meta property="twitter:title" content="Corporation Translog">
        <meta property="twitter:image" content="./image/Logo.png">
        <meta property="twitter:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional"> 
        <meta property="twitter:url" content="http://corporationtranslog.infinityfreeapp.com/">

        <!--Link de iconos de la pagina web-->
        <link rel="apple-touch-icon" sizes="180x180" href="./image/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon-16x16.png">
        <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">

        
        <!--Autor-->
        <meta name="author" content="Nestor Daniel">
        <meta rel="canonical" href="http://corporationtranslog.infinityfreeapp.com/">
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
            <div class="imagen-principal portada-home">
                <div class="contenedor-portada">
                    <div class="info-portada">
                        <h1>TRANSPORTAMOS TU FUTURO</h1>
                        <p>Agencia de transporte maritimo, nos enfocamos en tus necesidades.</p>
                        <a href="./contacto.php" class="button">Contactanos</a>
                    </div>
                </div>
                
            </div>
    
            <!----------------------Parte de Sobre Nosotros------------------------>
            <div class="sobre-nosotros">
                <div class="content-SN">
                    <h2>¿QUIENES SOMOS?</h2>
                    <p>Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es <strong> Proveer Servicios Integrales de Comercio Internacional tales como:</strong> Agentes de Carga, Transporte nacional e internacional y Fletamento Marítimo, ofreciendo respuestas oportunas y soluciones efectivas a los requerimientos de nuestros clientes.</p>
                    <a href="./about.php" class="button">Leer Mas</a>
                </div>
            </div>

            <!----------------------Parte de Servicios------------------------>
            <div class="servicios">
                <h2 class="title-servicios">Servicios</h2>

                <div class="servicios-content">

                    <div class="div-servicios logistica">
                            <div class="capa-servis">
                                <h2>Logística & Transporte de Carga</h2>
                                <p>Contamos con un equipo multidisciplinario para satisfacer las necesidades de nuestros clientes.</p>
                                <a href="./logística-transporte-carga.php">Leer mas</a>
                            </div>
                    </div>

                    <div class="div-servicios reparacion">
                            <div class="capa-servis">
                                <h2>Reparacion & Mantenimiento Naval</h2>
                                <p>Nuestro equipo de Ingenieros esta especializado para atender sus necesidades en el area naval.</p>
                                <a href="./reparacion-mantenimiento.php">Leer mas</a>
                            </div>
                    </div>


                    <div class="div-servicios trade">
                            <div class="capa-servis">
                                <h2>Trade International</h2>
                                <p>Somos especialistas en importaciones, exportaciones, garantizando satisfacciones en nuestros clientes.</p>
                                <a href="/trade-international.php">Leer mas</a>
                            </div>
                    </div>
                </div>
            </div>

            <!----------------------Parte de Portafolio------------------------>
            <div class="portafolio">
                <h2 class="title-portafolio">Portafolio</h2>
                <p>Proyectos, Evaluaciones, Importaciones, Exportaciones, Mecánica Naval.<br> Somos un equipo Multidisciplinario.</p>

                <div class="portafolio__galeria">
                    <div class="portafolio__galeria-div">
                        <div class="img-logistica"></div>
                        <p>Logística de Carga</p>
                    </div>
                    <div class="portafolio__galeria-div">
                        <div class="img-transporte"></div>
                        <p>Transporte de Carga</p>
                    </div>
                    <div class="portafolio__galeria-div">
                        <div class="img-mante"></div>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="portafolio__galeria-div">
                        <div class="img-trade"></div>
                        <p>Trader Internacional</p>
                    </div>
                </div>
                <a href="./contacto.php" class="button" style="margin-top: 60px;">Requerimientos</a>
            </div>

            <!----------------------Parte de Conocer Empresa------------------------>
            <div class="conocer">
                <div>
                    <h4><strong>¿Requiere alguno de nuestros servicios?</strong></h4>
                    <a href="./contacto.php" class="button">Contactanos</a>
                </div>
            </div>

        </main>

        <!------------------ Pies de pagina  ------------------>
        <?php require_once "./php/footer.php"?>
        
    </body>
</html>