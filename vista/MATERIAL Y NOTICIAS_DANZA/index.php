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
    <title>CURSO DE DANZA | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo danza.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS</h1>
                <p class="hero__copy">Aprende e integrate con salesianidad y armonia.</p>
                <a href="../PIZARRON_DANZA/index.php" class="hero__cta">Mas informacion del curso</a>    
                <a href="../index.php">Volver a los Cursos</a>
            </div>

            <img src="assets/logo danza.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT7.jpg" class="instructor__img">
                <h2 class="instructor__name">Profesor Victor Cornejo</h2>
                <p class="instructor__tag">Instructor a cargo de curso de danza</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso de danza, No te preocupes si no tienes ningún conocimiento previo en esta disciplina, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde sientas que lo puedes dominar, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/NOTICIA.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buen dia estudiantes, en el siguiente material les he colocado un video acerca de la coreografia de una de las canciones que bailaremos en crea j, fijense bien en los pasos y movimientos y en el siguiente ensayo lo pondremos en practica.</p>
                <a href="https://www.youtube.com/watch?v=Jj6wwvmBZ5Y" class="cta">Ver material !!</a>
            </div>
        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL 2.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #2</h2>
                <p class="about__paragraph">En el siguiente material les he colocado la playlist que contiene todas las canciones que bailaremos para la clausura de crea j, recordando que la tematica de esta es de los 80's.</p>
                <a href="https://open.spotify.com/playlist/1V652J0aaPLzyTlaietvCE?si=518c777efb954196" class="cta">Ver material !!</a>
            </div>
        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">NOTICIAS</h2>
                <br>
                <a href="#" class="cta">PARTICIPACION CREA J</a>

                <p class="about__paragraph">La generacion coreografica masculina y femenina del Colegio Don Bosco participaran en los actos de inaguracion y clausura de Crea j.</p>

            </div>

            <figure class="about__picture">
                <img src="assets/1.png" class="about__img">
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