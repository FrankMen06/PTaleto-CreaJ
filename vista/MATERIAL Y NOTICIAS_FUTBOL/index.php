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
    <title>CURSO FUTBOL | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo futbol.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS </h1>
                <p class="hero__copy">Aprende este deporte con salesianidad y armonia.</p>
                <a href="../PIZARRON_FUTBOL/index.php" class="hero__cta">Mas informacion del curso</a>    
                <a href="../index.php">Volver a los Cursos</a>
            </div>

            <img src="assets/logo futbol.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT2.png" class="instructor__img">
                <h2 class="instructor__name">Profesor Magno Diaz</h2>
                <p class="instructor__tag">Instructor a cargo de curso de Futbol</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso de futbol, No te preocupes si no tienes ningún conocimiento previo, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde puedas dominar este deporte, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 1.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buenos dias estudiantes, por favor leer de la pagina 4 a la 9 del siguiente material pdf respectivo al primer contenido de este curso acerca a los diferentes ejercicios de entrenamiento con distintas formaciones, lo estaremos ocupando para los proximos dos entrenos.  </p>
                <a download = "EJERCICIOS CON DISTINTAS FORMACIONES"  href="assets/MATERIAL 1.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 2.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #2</h2>
                <p class="about__paragraph">Buenos dias estudiantes, por favor leer e interpretar los siguientes ejercicios basado en los formatos de juego de posicion habituales que cuenta con elementos como informacion,imagenes y videos para comprender bien los ejercicios, lo estaremos retomando y poniendo en practica en los entrenos los dias viernes. </p>
                <a href="https://barcainnovationhub.com/es/entrenamiento-especifico-posicion-juego-de-posicion-en-el-futbol-de-elite/" class="cta">Ver mi Material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 3.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #3</h2>
                <p class="about__paragraph">Buenos dias estudiantes, por favor tomar en cuenta la informacion del siguiente material muy valioso abalado por la FIFA respecto a la buena nutricion en el futbol y otros aspectos muy importantes a tomar en cuenta.</p>
                <a download = "MATERIAL NUTRICION FUTBOL "  href="assets/MATERIAL 3.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>


        <section class="about container">
            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>
                <a href="#" class="cta">INVITACION A TORNEO</a>

                <p class="about__paragraph">La seleccion sub 12 ha sido invitada a jugar un torneo que sera realizado en el Colegio Santa Cecilia, en el que participaran otras instituciones salesianas que daran todo por quedar campeones.</p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 1.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">
            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>
                <a href="#" class="cta"> VICTORIA SELECCION SUB-16</a>

                <p class="about__paragraph">Felicitar al equipo de la seleccion de futbol sub-16 por haber ganado ayer contra el Colegio San Jose por resultado de 3 a 1, a seguir entrenando duro para seguir asi en los proximos encuentros.</p>

            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 2.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">
            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>
                <a href="#" class="cta"> MEJORA EN CANCHA 3</a>

                <p class="about__paragraph">La espera ha terminado, la cancha 3 ha sido mejorada en aspectos de cesped, nueva red en las metas entre otros aspectos que hacen ver una nueva cancha 3 renovada para utilizarse ya sea para entrenos o encuentros deportivos.</p>

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
                    <p class="footer__copy">Si tienes alguna duda, puedes conctarme en cualquiera de mis redes sociales</p>

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
                Talent System | Todos los derechos reservados
            </p>

        </div>
    </footer>

</body>
</html>