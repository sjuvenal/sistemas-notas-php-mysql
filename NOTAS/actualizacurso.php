<?php

include 'conexion.php';
//recibimos lo valores a modificar
$codigocurso=$_POST['codigocurso'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$docente=$_POST['docente'];

//ahora realizamos la modificacion  
$sql="update curso set docodigo='$docente',curnombre='$nombre',curdescripcion='$descripcion' where curcodigo='$codigocurso'" ;

mysql_query($sql, $con)or die("fallo la modificacion");

//y con esto nos regresamos a la lista de peliculas osea listaPelicual.php
header("Location:listarcurso.php");
?>
