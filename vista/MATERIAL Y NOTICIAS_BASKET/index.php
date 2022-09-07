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
    <title>CURSO BASKETBALL | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo basket.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS</h1>
                <p class="hero__copy">Aprende este deporte con salesianidad y armonia.</p>
                <a href="../PIZARRON_BASKET/index.php" class="hero__cta">Mas informacion del curso</a>    
                <a href="../index.php">Volver a los Cursos</a>
            </div>

            <img src="assets/logo basket.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT3.png" class="instructor__img">
                <h2 class="instructor__name">Profesor Daniel Pacheco</h2>
                <p class="instructor__tag">Instructor a cargo de curso de basketball</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso de basketball, No te preocupes si no tienes ningún conocimiento previo en este deporte, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde lo puedas dominar, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 1.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buen dia estudiantes, por favor leer el siguiente material de la pagina 7 a la 9 respecto a jugadas especiales a la hora de encestar, lo estaremos retomando el proximo entreno el dia lunes.</p>
                <a download = "MATERIAL #1: JUGADAS ESPECIALES"  href="assets/MATERIAL 1.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 2 .png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #2</h2>
                <p class="about__paragraph">Buen dia estudiantes, leer e interpretar de la pagina 3 a la 8 del siguiente material referente a ejercicios de mejora en la tecnica tales como: recepcion,lanzamiento,desplazamiento, etc.</p>
                <p class="about__paragraph">Lo estaremos retomando y poniendo en practica los siguientes 3 entrenos los dias miercoles. </p>
                <a download = "MATERIAL #2: EJERCICIOS CON TECNICA"  href="assets/MATERIAL 2.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 3.gif" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #3</h2>
                <p class="about__paragraph">Por favor leer y tomar en cuenta la informacion del siguiente material acerca de la correcta alimentacion para un optimo rendimiento deportivo, aspectos de nutricion, y como un plus un plan de alimentacion.</p>
                <a download = "MATERIAL #3: LA NUTRICION EN EL BASKET"  href="assets/MATERIAL 3.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>

                <a href="#" class="cta">PREPARACION SELECCION SUB 12</a>

                <p class="about__paragraph">Los chicos de la seleccion sub 12 se preparan muy fuerte en los entrenamientos para los proximos encuentros contra el Colegio Ricaldone y el Colegio San Jose.</p>


            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 1.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>

                <a href="#" class="cta">INVITACION TORNEO SELECCION SUB 16</a>

                <p class="about__paragraph">El equipo femenino de la seleccion sub 16 ha sido invitado a participar en un torneo que sera realizado en distintas instituciones salesianas en honor a los 125 años de los salesianos en Centroamerica.</p>


            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 2.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>

                <a href="#" class="cta">SELECCION SUB 10 CAMPEON</a>

                <p class="about__paragraph">Felicitaciones a los niños de la seleccion sub 10 que lograron alzarse con el primer lugar en el torneo de los 125 años de los salesianos en Centroamerica.</p>


            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 3.jpg" class="about__img">
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