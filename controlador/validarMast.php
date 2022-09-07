<?php
include '../modelo/conect.php';
session_start();

$usuMast = $_POST['correo'];
$contra = $_POST['contraseña'];

$consulta = "SELECT * FROM logadmin WHERE correo='$usuMast' and  contraseña='$contra'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    $_SESSION['user'] = $usuMast;
    header("location:../vista/indexMast.php");
    
}else{
   ?>
   <script>
    
        let resultado = window.confirm('Usuario No encontrado');
        if (resultado === true) {
            window.location.href = "../vista/loginMast.php";
        }else{
            window.location.href = "../vista/loginMast.php";
        }
   </script>
    
   <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);