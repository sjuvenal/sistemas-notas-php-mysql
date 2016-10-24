<?php

include 'conexion.php';
//recibimos lo valores a modificar
$codigodocente=$_POST['codigodocente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

//ahora realizamos la modificacion  
$sql="update docente set donombre='$nombre',doapellidos='$apellidos',dosexo='$sexo',dodni='$dni',dodireccion='$direccion',dotelefono='$telefono' where docodigo='$codigodocente'" ;

mysql_query($sql, $con)or die("fallo la modificacion");

//y con esto nos regresamos a la lista de peliculas osea listaPelicual.php
header("Location:listardocente.php");
?>
