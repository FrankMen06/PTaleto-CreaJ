<?php
include("../modelo/conect.php");

$estudiante = $_GET['correo'];

$sql = "DELETE FROM formorqst WHERE correo = '$estudiante'";

$query = mysqli_query($conexion,$sql);

    if($query){
        header("location:../vista/indexMast.php");
    }

?>