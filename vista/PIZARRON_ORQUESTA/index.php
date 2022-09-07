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
                <h1 class="hero__title">CURSO - ENSAYOS ORQUESTA DON BOSCO</h1>
                <p class="hero__copy">Aprende e integrate con salesianidad y armonia.</p>
                <a href="../MATERIAL Y NOTICIAS_ORQUESTA/index.php" class="hero__cta">Ver Material Y Noticias</a> 
                <a href="../index.php">Volver a los cursos</a>     
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

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Capacidades a adquirir en el curso</h2>

                <p class="about__paragraph">Primeramente estos ensayos son un espacio de  encuentro social, en el que se puede conversar, compartir e intercambiar opiniones, y hasta desarrollar hermosas amistades, con el fin de cada día aprender algo nuevo como: aprender a tocar cualquier tipo de instrumento, aprender canto, baile, etc.</p>

                <p class="about__paragraph">Teniendo como objetivo en este curso de la Orquesta Don Bosco que los estudiantes se puedan integrar y convivir en un ambiente salesiano teniendo como base el sistema preventivo de Don Bosco.</p>

                <a href="#" class="cta">Mas informacion del curso - Ver noticias</a>
            </div>

            <figure class="about__picture">
                <img src="assets/img4.jpg" class="about__img">
            </figure>

        </section>

        <section class="card">
            <div class="container">

                <h2 class="title">Consejos y aspectos importantes a tomar en cuenta:</h2>

                <div class="card__container">

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/habitos.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">MANTENER LAS NORMAS DE BIOSEGURIDAD</h3>
                        <p class="card__paragraph"></p>
                    </div>

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/pensamiento-positivo.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">MANTENER SIEMPRE UNA ACTITUD POSITIVA</h3>
                        <p class="card__paragraph"></p>
                    </div>

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/union.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">MANTEN UNA RELACION SANA CON LOS INTEGRANTES DE LA ORQUESTA</h3>
                        <p class="card__paragraph"></p>
                    </div>
                    
                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/articulos-de-aseo.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">BUEN LAVADO DE MANOS Y ALCOHOL GEL</h3>
                        <p class="card__paragraph"></p>
                    </div>

                </div>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/ENSAYOS-ORQUESTA.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">HORARIOS DE ENSAYOS:</h2>
                <p class="about__paragraph">A continuacion se te detalla el horario que se usara en los ensayos de la orquesta:</p>
                <a download = "ENSAYOS ORQUESTA DON BOSCO"  href="assets/ENSAYOS-ORQUESTA.jpg" class="cta">Quiero descargar mi horario !!</a>
            </div>
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