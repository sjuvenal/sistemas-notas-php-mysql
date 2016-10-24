<?php

include 'conexion.php';
//recibimos lo valores a modificar
$codigoalumno=$_POST['codigoalumno'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];
$fecnac=$_POST['fecnac'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$clave=$_POST['clave'];
//ahora realizamos la modificacion  
$sql="update alumno set alunombre='$nombre',alupaterno='$paterno',alumaterno='$materno',alusexo='$sexo',aludireccion='$direccion',alutelefono='$telefono',alufechanac='$fecnac',aluclave='$clave',aludni='$dni' where alucodigo='$codigoalumno'" ;

mysql_query($sql, $con)or die("fallo la modificacion");

//y con esto nos regresamos a la lista de peliculas osea listaPelicual.php
header("Location:listaralumno.php");
?>
