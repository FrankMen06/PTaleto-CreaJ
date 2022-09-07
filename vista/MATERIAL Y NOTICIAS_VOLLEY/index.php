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
    <link rel="shortcut icon" href="assets/logo volley.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS</h1>
                <p class="hero__copy">Aprende este deporte con salesianidad y armonia.</p>
                <a href="../PIZARRON_VOLLEY" class="hero__cta">Mas informacion del curso</a>    
                <a href="../index.php">Volver a los Cursos</a>
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

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 1.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buen dia estudiantes, por favor leer de la pagina 17 a la 20 sobre un material acerca de los fundamentos tecnicos en el volleyball, lo estaremos retomando en los entrenos de los dias miercoles.</p>
                <a download = "MATERIAL #1: FUNDAMENTOS TECNICOS EN EL VOLLEYBALL"  href="assets/MATERIAL 1.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 2.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #2</h2>
                <p class="about__paragraph">Buen dia estudiantes, por favor vean el siguiente video que les he colocado acerca de ejercicios para mejorar la recepcion en el voleibol, son 12 ejercicios en total vean y traten de practicar y en el siguiente entreno los pondremos en practica.</p>
                <a href="https://www.youtube.com/watch?v=a0-JCf3P_eU" class="cta">Ver Material !!</a>
            </div>
            
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 3.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #3</h2>
                <p class="about__paragraph">Buen dia estudiantes, por favor leer y tomar en cuenta el siguiente material acerca de la buena nutricion en este deporte, abordando temas como control de la ingesta de alimentos,dietas, aplicaciones practicas,etc.</p>
                <a download = "MATERIAL 3: NUTRICION"  href="assets/MATERIAL 3.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
            
        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">NOTICIAS</h2>
                <br>
                <a href="#" class="cta">AMISTOSO</a>

                <p class="about__paragraph">El equipo femenino de la seleccion sub 17 disputo un encuentro amistoso contra el colegio Ricaldone, en preparacion al torneo que disputaran en conmemoracion de los 125 años de los salesianos en Centroamerica.</p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 1.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">NOTICIAS</h2>
                <br>
                <a href="#" class="cta">SUSPENSION DE ENTRENOS</a>

                <p class="about__paragraph">Se suspende el entreno de este miercoles por motivos de lluvia, se reanudaran hasta nuevo aviso. </p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 2.png" class="about__img">
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