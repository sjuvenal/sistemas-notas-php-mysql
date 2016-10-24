<?
include"conexion.php";

////
//////recibimos el codigo de la seccion a eliminar, de la pagina listaseccion.php

$codigoseccion=$_REQUEST['codigoseccion'];

$sql="delete from seccion where secodigo=$codigoseccion";
mysql_query($sql,$con)or die("falla la eliminacion");
//con el header regresamos a la pagina de la listaseccion.php
header("location:listarseccion.php")


?>
