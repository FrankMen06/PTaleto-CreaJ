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
    <title>CURSO BARRA AZUL Y ORO | TALENT SYSTEM</title>
    <link rel="shortcut icon" href="assets/logo barra.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="hero">

        <div class="hero__container container">

            <div class="hero__texts">
                <h1 class="hero__title">MATERIAL Y NOTICIAS</h1>
                <p class="hero__copy">Aprende e integrate con salesianidad y armonia.</p>
                <a href="../PIZARRON_BARRA/index.php" class="hero__cta">Mas informacion del curso</a>   
                <a href="../index.php">Volver a los Cursos</a> 
            </div>

            <img src="assets/logo barra.png" class="hero__img">

        </div>


    </header>

    <main class="main">

        <section class="instructor container">

            <div class="instructor__container">
                <img src="assets/DT5.png" class="instructor__img">
                <h2 class="instructor__name">Kevin Samayoa</h2>
                <p class="instructor__tag">Instructor a cargo de curso de Barra Azul y Oro</p>
                <p class="instructor__paragraph">Hola 🖐, yo seré tu encargado en este curso, No te preocupes si no tienes ningún conocimiento previo en este deporte, en este curso empezaremos desde cero e iremos poco a poco hasta llegar a un nivel donde lo puedas dominar, ¿Listo para comenzar?</p>
            </div>

        </section>

        <section class="course container">

            <figure class="course__picture">
                <img src="assets/MATERIAL.png" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">MATERIAL #1</h2>
                <p class="about__paragraph">Buenos dias, en el siguiente material les dejo los cantos de barra, para que los puedan tener a la mano y puedan compartirlo con sus grados en los momentos azul y oro.</p>
                <a download = "CANTOS-BARRA AZUL Y ORO"  href="assets/MATERIAL.pdf" class="cta">Quiero descargar mi material !!</a>
            </div>
        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>
                <a href="#" class="cta">SEMANA DE LA JUVENTUD COLEGIO SANTA CECILIA</a>
                <p class="about__paragraph">La barra azul y oro junto a la batucada se hizo presente en la semana de la juventud del Colegio Santa Cecilia en donde estuvieron apoyando a las distintas selecciones que jugaron.</p>
            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 1.jpg" class="about__img">
            </figure>

        </section>

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Noticias</h2>
                <br>
                <a href="#" class="cta">PARTICIPACION EN CREA J</a>
                <p class="about__paragraph">La barra azul y oro junto a la batucada tendran una destacada participacion en la clausura de crea j con los alumnos de la Promocion 2022.</p>
            </div>

            <figure class="about__picture">
                <img src="assets/NOTICIA 2.jpg" class="about__img">
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