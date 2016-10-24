<?php
include 'conexion.php';

////
//////recibimos el codigo de la pelicula a eliminar, de la pagina listaPelicula.php

$codigogrado=$_REQUEST['codigogrado'];

//////terminando de recoger los datos, pasamos a eliminar al registro de
//////dichos datos a la tabla pelicula
$sql="delete from grado where gracodigo=$codigogrado";
//ejecutamos el $sql
mysql_query($sql, $con);
//con el header regresamos a la pagina de la listaProductos.php
header("Location:listargrado.php");
?>
