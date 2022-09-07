<?php

include("../modelo/conect.php");

$correo = $_POST['correo'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$gradSec = $_POST['gradSec'];
$colEsc = $_POST['colEsc'];
$espe = $_POST['espe'];

$query = "INSERT INTO formvoley VALUES('$correo','$nombres','$apellidos','$gradSec','$colEsc','$espe')";
$result = mysqli_query($conexion, $query);

if(!$result){
    die("No guardo");
}

header("location:../vista/index.php");

?>