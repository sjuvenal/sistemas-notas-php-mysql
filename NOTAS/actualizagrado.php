<?php

include 'conexion.php';
//recibimos lo valores a modificar
$codigogrado=$_POST['codigogrado'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$seccion=$_POST['seccion'];

//ahora realizamos la modificacion  
$sql="update grado set secodigo='$seccion',granombre='$nombre',gradescripcion='$descripcion' where gracodigo='$codigogrado'" ;

mysql_query($sql, $con)or die("fallo la modificacion");

//y con esto nos regresamos a la lista de peliculas osea listaPelicual.php
header("Location:listargrado.php");
?>
