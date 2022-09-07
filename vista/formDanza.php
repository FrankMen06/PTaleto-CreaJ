<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location:../vista/loginEst.php");   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloform.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/form3.css"/>
	<link rel="stylesheet" type="text/css" href="../css/menu2.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario Inscripción</title>
</head>
<body>
<section>
<div id="background">
		
    <div id="contenido">
      
      <div id="form">
                    <img src="../imagenes/LOGO PRIN.png" class="img-fluid w-50 py-lg-3" />
                    
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h3 class="font-weight-bold mb-4">Registrarse - DANZA</h3>

                <form action="../controlador/controdanza.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="estudiante1234@cdb.edu.sv" required>
                  <label for="floatingInput">Correo:</label>
                </div>

                <div class="form-floating">
                  <input type="text" class="form-control" id="nombres" name="nombres"  placeholder="José Manuel">
                  <label for="floatingName">Nombres: </label>
                </div>

                <br>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ramirez Erazo" required>
                  <label for="floatingInput">Apellidos:</label>
                </div>


                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="gradSec" name="gradSec" placeholder="3C" required>
                  <label for="floatingInput">Grado y Sección:</label>
                </div>

                
                <div class="form-check">
                  <input type="radio" id="colEsc" name="colEsc" value="Colegio" class="form-input">Colegio Don Bosco
                  <br>
                  <input type="radio" id="colEsc" name="colEsc" value="Centro Escolar" class="form-input">Centro Escolar Cátolico San Juan Bosco
                </div>



                <div class="form-floating">
                  <select class="form-select" name="espe" aria-label="Default select example">
                    <option selected>Seleccione Especialidad</option>
                    <option value="DS">Desarrollo de Software</option>
                    <option value="DG">Diseño Gráfico</option>
                    <option value="ECA">Eléctronica</option>
                    <option value="MECA">Mecanica</option>
                    <option value="EMCA">Eléctromecanica</option>
                    <option value="SALUD">Atención Primaria Salud</option>
                  </select>
                  <script>
                  function menEnvi(){
                    alert("Envíando...");
                  }
                </script>
                                <br>
                <center><input type="submit" class="submit" name="enviar" value="Envíar" onclick="menEnvi()"></center>
                </form>
                <a href="../vista/index.php" class="btn btn-primary">Volver al Inicio</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                </form>
            </div>


        </div>
    </div>
  </div>
</section>
</body>
</html>