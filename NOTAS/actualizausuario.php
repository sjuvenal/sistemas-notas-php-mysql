<?php

include 'conexion.php';
//recibimos lo valores a modificar
$codigousuario=$_POST['codigousuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$tipo=$_POST['tipo'];
$clave=$_POST['clave'];

//ahora realizamos la modificacion  
$sql="update usuario set usnombre='$nombre',usapellidos='$apellidos',ususuario='$usuario',ustipo='$tipo',usclave='$clave' where uscodigo='$codigousuario'" ;

mysql_query($sql, $con)or die("fallo la modificacion");

//y con esto nos regresamos a la lista de peliculas osea listaPelicual.php
header("Location:listarusuario.php");
?>
