<?php 
include("../modelo/conect.php");

$destinatario = $_GET['correo'];
$remitente = "talentsystem2022@gmail.com";
$asunto = "Aceptación de Curso";
$mensaje = "Felicidades!. Te esperamos pronto en los ensayos de Danza";
$headers = "From: $remitente\r\nReply-to: $remitente";

mail($destinatario, $asunto, $mensaje, $headers);

$sql = "DELETE FROM formdanza WHERE correo = '$destinatario'";

$query = mysqli_query($conexion,$sql);

if($query){
    echo "<script>
            var enviado = confirm('Se envió el correo exitosamente');
            window.location= '../vista/indexMast.php';
        </script>";
}


?>