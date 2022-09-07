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
    <title>CURSO VOLLEYBALL | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo futbol.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">CURSO - ENTRENOS DE VOLLEYBALL</h1>
                <p class="hero__copy">Aprende este deporte con salesianidad y armonia.</p>
                <a href="../MATERIAL Y NOTICIAS_VOLLEY" class="hero__cta">Ver Material y Noticias</a>    
                <a href="../index.php">Volver a los cursos</a>  
            </div>

            <img src="assets/logo volley.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT4.png" class="instructor__img">
                <h2 class="instructor__name">Profesor Wilber Aquino</h2>
                <p class="instructor__tag">Instructor a cargo de curso de volleyball</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso de volleyball, No te preocupes si no tienes ningún conocimiento previo en este deporte, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde lo puedas dominar, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Capacidades a adquirir en el curso</h2>

                <p class="about__paragraph">Primeramente durante los entrenos no se realiza tanto el ejercicio individual repetitivo, ya que lo ideal seria que los jugadores desarrollen técnica a través de vivir situaciones reales de juego. Se realiza mas los ejercicios combinados para conseguir acercar lo más posible a los atletas a acciones reales con el objetivo de ejemplificar acciones reales de juego para trabajar movimientos que suceden durante un juego.</p>

                <p class="about__paragraph">Teniendo como objetivo en este curso de volley que los estudiantes se puedan adaptar a cualquier lugar y ambiente, conviviendo en un ambiente salesiano teniendo como base el sistema preventivo de Don Bosco.</p>

                <a href="#" class="cta">Mas informacion de este curso</a>
            </div>

            <figure class="about__picture">
                <img src="assets/img2.jpg" class="about__img">
            </figure>

        </section>

        <section class="card">
            <div class="container">

                <h2 class="title">Consejos y aspectos importantes a tomar en cuenta:</h2>

                <div class="card__container">

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/activos.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">CALENTAR Y ESTIRAR ANTES DEL ENTRENO</h3>
                        <p class="card__paragraph"></p>
                    </div>

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/botellas.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">BUENA HIDRATACION Y PROTECCION SOLAR</h3>
                        <p class="card__paragraph"></p>
                    </div>

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/distanciamiento.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">MANTEN EL DISTANCIAMIENTO</h3>
                        <p class="card__paragraph"></p>
                    </div>
                    
                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/manos.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">BUEN LAVADO DE MANOS Y ALCOHOL GEL</h3>
                        <p class="card__paragraph"></p>
                    </div>

                </div>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/HORARIO-VOLLEYBALL.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">HORARIOS DE ENTRENO:</h2>
                <p class="about__paragraph">A continuacion se te detalla el horario que se usara en el curso de volleyball</p>
                <a download = "HORARIO-VOLLEYBALL"  href="assets/HORARIO-VOLLEYBALL.png" class="cta">Quiero descargar mi horario !!</a>
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