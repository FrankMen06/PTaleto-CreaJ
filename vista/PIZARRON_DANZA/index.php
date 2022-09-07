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
                <h1 class="hero__title">CURSO - ENSAYOS DE DANZA</h1>
                <p class="hero__copy">Aprende e integrate con salesianidad y armonia.</p>
                <a href="../MATERIAL Y NOTICIAS_DANZA/index.php" class="hero__cta">Ver Material y Noticias </a>   
                <a href="../index.php">Volver a los cursos</a>  
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

        <section class="about container">

            <div class="about__course">
                <h2 class="title title--border">Capacidades a adquirir en el curso</h2>

                <p class="about__paragraph">En la danza, los ensayos y las prácticas son la base esencial de la formación, y es importante tener en cuenta algunas reglas básicas de comportamiento para aprovechar al máximo a nuestros maestros, compañeros y nosotros mismos.</p>

                <p class="about__paragraph">Teniendo como objetivo en este curso de danza que los estudiantes se puedan integrar y convivir en un ambiente salesiano teniendo como base el sistema preventivo de Don Bosco.</p>

                <a href="#" class="cta">Mas informacion del curso- Ver noticias</a>
            </div>

            <figure class="about__picture">
                <img src="assets/img5.jpg" class="about__img">
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
                        <h3 class="card__title">CALENTAR Y ESTIRAR ANTES DEL ENSAYO</h3>
                        <p class="card__paragraph"></p>
                    </div>

                    <div class="card__item">
                        <figure class="card__img">
                            <img src="assets/mascara.png" class="card__picture">
                        </figure>
                        <h3 class="card__title">HACER BUEN USO DE MASCARILLA</h3>
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
                <img src="assets/HORARIO-DANZA.jpg" class="course__img">
            </figure>

            <div class="course__about">
                <h2 class="title">HORARIOS DE ENSAYOS:</h2>
                <p class="about__paragraph">A continuacion se te detalla el horario que se usara en el curso de danza</p>
                <a download = "HORARIO-DANZA"  href="assets/HORARIO-DANZA.jpg" class="cta">Quiero descargar mi horario !!</a>
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