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
        <title>Contacto - Corporation Translog</title>
        <meta name="description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta name="keywords" content="buques, tiempo, vieje, calculadora, barcos, lanchas, transporte, logistica, Internacional, mar, atlantico, pacifico, navegar, puertos, envios, container, maritimo, entrega, embarcaciones, carga, muelle">

        <!--Descripcion de compartir en Instagram-->
        <meta property="og:title" content="Corporation Translog">
        <meta property="og:image" content="./image/Logo.png">
        <meta property="og:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional">
        <meta property="og:url" content="http://corporationtranslog.infinityfreeapp.com/contacto.php">
        
        <!--Descripcion de compartir en Twitter-->
        <meta property="twitter:title" content="Corporation Translog">
        <meta property="twitter:image" content="./image/Logo.png">
        <meta property="twitter:description" content="Somos una empresa de Logística Internacional con Alcance Global. Nuestra mision es Proveer Servicios Integrales de Comercio Internacional"> 
        <meta property="twitter:url" content="http://corporationtranslog.infinityfreeapp.com/contacto.php">

        <!--Link de iconos de la pagina web-->
        <link rel="apple-touch-icon" sizes="180x180" href="./image/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon-16x16.png">
        <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">

        
        <!--Autor-->
        <meta name="author" content="Nestor Daniel">
        <meta rel="canonical" href="http://corporationtranslog.infinityfreeapp.com/contacto.php">
        <meta name="robots" content="NOODP,NOYDIR">

        <!--Styles-->
        <link rel="stylesheet" href="./css/styles.css">

        <!--Base de iconos-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://kit.fontawesome.com">
        <script src="https://kit.fontawesome.com/8f34396e62.js" crossorigin="anonymous"></script>

        <!--JavaScripts-->
        <script defer src="js/index.js"></script>

        <!-- reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <!------------------  Cabezera de pagina ------------------>
        <?php require_once "./php/menu.php"?>
        

        <!------------------contenido de pagina ------------------>
        <main>
            <div class="imagen-principal portada-contacto">
                <div>
                    <h1>NUESTROS CONTACTOS</h1>
                    <p>Logística Internacional con alcance Global.</p>
                </div>
            </div>


            <div class="content-contact">
                <div class="contactar">
                    <!-- ------------Formulario------------ -->
                    <div class="area-contacto">
                        <form action="./php/correo.php" method="post" enctype="application/x-www-form-urlencoded" class='CONTACTO'>
                            <h2>Solicite su consulta gratuita</h2>
                            <input class="input-info" required type="text" name="name" id="name" placeholder="Nombre y Apellido *">
                            <input class="input-info" required type="email" name="email" id="email" placeholder="Email *">
                            <input class="input-info" required type="text" name="empresa" id="empresa" placeholder="Nombre de empresa *">
                            <input class="input-info" required type="number" name="telefono" id="telefono" placeholder="Teléfono (+58) *">
                            <textarea class="input-mensaje" name="message" id="message" cols="30" rows="10" placeholder="Mensaje *"></textarea>
                            <p class="error"></p>
                            <div class="g-recaptcha" data-sitekey="6LeDlrQpAAAAACDqENvlAuh4ShInnMaezlU_u06O"></div>
                            <button class="enviar" type="submit">Enviar Mensaje</button>
                        </form>
                    </div>
                    <!-- ------------Contactos------------ -->
                    <div class="area-informacion">
                        <h2>Nuestros Contactos</h2>
                        <div>
                            <a href="https://maps.google.com/maps/dir//Palmeras+Del+Este+2GCR%2BF54+Av.+San+Agust%C3%ADn+Panama+City,+Panam%C3%A1+Province,+Panam%C3%A1/@9.0211031,-79.4594995,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x8facaa1a0211463f:0xf7cd8a0d0c6bf172"><i class="fa-solid fa-location-dot"></i>Ave. San Agustin Almacenes del Este, Ofic. 1 Costa del Este, Ciudad de Panamá.</a>
                            <a href="mailto:info@corporationtranslog.com"><i class="fa-solid fa-envelope"></i>info@corporationtranslog.com</a>
                            <a href="mailto:chartering@corporationtranslog.com"><i class="fa-solid fa-envelope"></i>chartering@corporationtranslog.com</a>
                            <a href="mailto:marketing@corporationtranslog.com"><i class="fa-solid fa-envelope"></i>marketing@corporationtranslog.com</a>
                            <a href="mailto:sales@corporationtranslog.com"><i class="fa-solid fa-envelope"></i>sales@corporationtranslog.com</a>
                            <a href="tel:+59996826463"><i class="fa fa-whatsapp"></i>+599 9 682 6463</a>
                        </div>
                    </div>
                </div>

                <!-- ------------Mapa------------ -->
                <div class="mapa">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18744.126664479256!2d-79.46359885976759!3d9.02107148153506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8facaa1a0211463f%3A0xf7cd8a0d0c6bf172!2sPalmeras%20Del%20Este!5e0!3m2!1ses!2ses!4v1710264563784!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </main>

        <!------------------ Pies de pagina  ------------------>
        <script src="./js/ajax.js"></script>
        <?php require_once "./php/footer.php"?>
        
    </body>
</html>