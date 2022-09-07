<?php
include '../modelo/conect.php';
session_start();

$usuario = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta = "SELECT * FROM logestu WHERE correo='$usuario' and  contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    $_SESSION['user'] = $usuario;
    header("location: ../vista/index.php");
}else{
    ?>
   <script>
    
        let resultado = window.confirm('Usuario No encontrado');
        if (resultado === true) {
            window.location.href = "../vista/loginEst.php";
        }else{
            window.location.href = "../vista/loginEst.php";
        }
   </script>
    
    <?php

}

mysqli_free_result($resultado);
mysqli_close($conexion);