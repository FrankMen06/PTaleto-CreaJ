<?php

$server = "localhost";
$user = "id19524810_talentsystem";
$pass = "CreajTal3nSyst3m2022$";
$db = "id19524810_ptalento";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
    die("La conexion ha fallado" .$conexion->connect_errno);
}