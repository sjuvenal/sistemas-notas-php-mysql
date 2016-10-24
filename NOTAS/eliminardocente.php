<?php
include 'conexion.php';

////
//////recibimos el codigo de la pelicula a eliminar, de la pagina listaPelicula.php

$codigodocente=$_REQUEST['codigodocente'];

//////terminando de recoger los datos, pasamos a eliminar al registro de
//////dichos datos a la tabla pelicula
$sql="delete from docente where docodigo=$codigodocente";
//ejecutamos el $sql
mysql_query($sql, $con);
//con el header regresamos a la pagina de la listaProductos.php
header("Location:listardocente.php");
?>
