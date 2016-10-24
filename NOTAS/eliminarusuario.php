<?php
include 'conexion.php';

////
//////recibimos el codigo de la pelicula a eliminar, de la pagina listaPelicula.php

$codigousuario=$_REQUEST['codigousuario'];

//////terminando de recoger los datos, pasamos a eliminar al registro de
//////dichos datos a la tabla pelicula
$sql="delete from usuario where uscodigo=$codigousuario";
//ejecutamos el $sql
mysql_query($sql, $con);
//con el header regresamos a la pagina de la listaProductos.php
header("Location:listarusuario.php");
?>
