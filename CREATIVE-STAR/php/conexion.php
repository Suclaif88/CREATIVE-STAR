<?php

$servidor="localhost";
$usuario="root";
$clave="";
$db="cs_db";

$conexion=mysqli_connect($servidor,$usuario,$clave,$db);

if(!$conexion){
    die("error de conexion: ".mysqli_connect_error());
}

?>