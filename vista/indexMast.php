<?php
    session_start();
    $usuMast = $_SESSION['user'];

    if(!isset($usuMast)){
        header("location:../vista/loginMast.php");   
    }

    include("../modelo/conect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" type="text/css" href="../css/menu2.css">    
    <title>Index Maestros</title>
</head>
<body>
    <header>
    <nav id="menu">
<input type="checkbox" id="check">
            <label for="check" class="botcheck">
            <i class="fas fa-bars"></i>
            </label>
                <img src="../imagenes/LOGO PRIN.png" alt="" class="logo">
                <ul class="lista"> 
				<li><center><h1>Bienvenido <?php echo "$usuMast" ?></h1></li></center>
                    <li><a class="active" href="#">Inicio</a></li>
          			<li><a href="../controlador/salirMast.php">Cerrar sesión</a></li>
                </ul>
</nav>
</header>
<div id="background">
<div class="container">
    <br><br><br><br><br>
    <table class="table1">
        <thead>
                <center><h1>Inscripciones Fútbol</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formfut";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>


                <th><button class="btn btn-primary" ><a href="../controlador/correoFut.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimFut.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>

    <table class="table2">
        <thead>
                <center><h1>Inscripciones Basket</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formbasket";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>
                <th><button class="btn btn-primary"><a href="../controlador/correoBasket.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimbasket.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>

    <table class="table3">
        <thead>
                <center><h1>Inscripciones Danza</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formdanza";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>
                <th><button class="btn btn-primary"><a href="../controlador/correoDanza.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimdanza.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>

    <table class="table4">
        <thead>
                <center><h1>Inscripciones Barra</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formbarra";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>
                <th><button class="btn btn-primary"><a href="../controlador/correoBarra.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimBarra.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>

    <table class="table5">
        <thead>
                <center><h1>Inscripciones Orquesta</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formorqst";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>
                <th><button class="btn btn-primary"><a href="../controlador/correoOrquesta.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimOrqst.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>

    <table class="table6">
        <thead>
                <center><h1>Inscripciones Volleyball</h1></center>
                <br>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado y Sección</th>
                <th>Colegio o Centro Escolar</th>
                <th>Especialidad</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql= "SELECT * FROM formvoley";
                $query = mysqli_query ( $conexion,$sql );
            //    $row = mysqli_fetch_array ($query);

                while ($row=mysqli_fetch_array($query) ){
            ?>
   
            <div class="scroll">
            <tr>
                <th> <?php echo $row ["correo"] ?> </th>
                <th> <?php echo $row ["nombres"] ?> </th>
                <th> <?php echo $row ["apellidos"] ?> </th>
                <th> <?php echo $row ["gradSec"] ?> </th>
                <th> <?php echo $row ["colEsc"] ?> </th>
                <th> <?php echo $row ["especialidad"] ?> </th>
                <th><button class="btn btn-primary"><a href="../controlador/correoVoley.php?correo=<?php echo $row['correo']?>">Aceptar Solicitud</a></button></th>
                <th><button class="btn2 btn-primary"><a href="../controlador/elimVoley.php?correo=<?php echo $row['correo']?>">Eliminar Solicitud</a></button></th>
            </tr>
            </div>
             <?php 
             }?>

        </tbody>
    </table>
    <br><br>    
</div>
</div>
</body>
</html>