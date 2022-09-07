<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location:../vista/loginEst.php");   
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO ORQUESTA DON BOSCO | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo orquesta.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS</h1>
                <p class="hero__copy">Aprende e integrate con salesianidad y armonia.</p>
                <a href="../PIZARRON_ORQUESTA" class="hero__cta">Mas informacion del curso - Ver Material</a>    
                <a href="../index.php">Volver a los Cursos</a>
            </div>

            <img src="assets/logo orquesta.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT6.png" class="instructor__img">
                <h2 class="instructor__name">Profesor Roberto Napoleon Vasquez</h2>
                <p class="instructor__tag">Instructor a cargo de los ensayos de la Orquesta Don Bosco</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso en la Orquesta Don Bosco, No te preocupes si no tienes ningún conocimiento previo sobre algun instrumento o canto, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde lo puedas dominar en cualquiera de los dos elementos, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 1.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buen dia estudiantes, en el siguiente material les he colocado los cantos salesianos con su respectiva letra y un video de demostracion que los ocuparemos para los proximos eventos que hayan, por favor aprender la letra de los primeros 10 cantos ya que lo estaremos retomando en el siguiente ensayo.</p>
                <a download = "MATERIAL #1: CANTOS SALESIANOS"  href="assets/MATERIAL 1.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 2.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #2</h2>
                <p class="about__paragraph">A continuacion les he colocado la partituta del canto Gonna fly now, una de las canciones que tocaremos para Crea-j.</p>
                <a download = "MATERIAL #2: PARTITUTA CANCION"  href="assets/MATERIAL 2.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">NOTICIAS</h2>
                <br>
                <a href="#" class="cta">ENSAYO GENERAL</a>

                <p class="about__paragraph">Este sabado habra un ensayo  general para terminar de afianar detalles para el dia jueves que sera la inaguracion de Crea-j. </p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 2.png" class="about__img">
            </figure>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">NOTICIAS</h2>
                <br>
                <a href="#" class="cta">FECHA PRESENTACION ORQUESTA EN CREA J</a>

                <p class="about__paragraph">La internacional Orquesta Don Bosco se presentara este sabado por la mediodia.</p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA.png" class="about__img">
            </figure>

        </section>

    </main>

    <footer class="footer">
        <div class="footer__container container">

            <div class="footer__contact">
                <div class="footer__texts">
                    <h2 class="title">¿Tienes algunda duda?</h2>
                    <p class="footer__copy">Si tienes alguna duda, no dudes en contactarnos en cualquiera de nuestras redes sociales.</p>

                    <div class="footer__social">
                        <a href="#" class="footer__link">
                           <img src="assets/bxl-facebook.svg" class="footer__icon">
                        </a>
                        <a href="#" class="footer__link">
                           <img src="assets/bxl-twitter.svg" class="footer__icon">
                        </a>
                        <a href="#" class="footer__link">
                           <img src="assets/bxl-instagram.svg" class="footer__icon">
                        </a>
                    </div>
                </div>

                <figure class="footer__picture">
                    <img src="assets/LOGO PRIN.png" class="footer__img">
                </figure>
            </div>

            <p class="footer__copyright">
                Talent System | Todos los derechos reservados.</p>

        </div>
    </footer>

</body>
</html>