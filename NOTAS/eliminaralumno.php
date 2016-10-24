<?php
include 'conexion.php';

////
//////recibimos el codigo de la pelicula a eliminar, de la pagina listaPelicula.php

$codigoalumno=$_REQUEST['codigoalumno'];

//////terminando de recoger los datos, pasamos a eliminar al registro de
//////dichos datos a la tabla pelicula
$sql="delete from alumno where alucodigo=$codigoalumno";
//ejecutamos el $sql
mysql_query($sql, $con);
//con el header regresamos a la pagina de la listaProductos.php
header("Location:listaralumno.php");
?>
