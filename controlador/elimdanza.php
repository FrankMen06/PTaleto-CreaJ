<?php
include("../modelo/conect.php");

$estudiante = $_GET['correo'];

$sql = "DELETE FROM formdanza WHERE correo = '$estudiante'";

$query = mysqli_query($conexion,$sql);

    if($query){
        header("location:../vista/indexMast.php");
    }

?>