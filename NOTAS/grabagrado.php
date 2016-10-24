<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(gracodigo),0)+1 from grado";
$rs=mysql_query($sql,$con);
$codgrado=mysql_result($rs,0,0);
////
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$seccion=$_POST['seccion'];
$descripcion=$_POST['descripcion'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into grado (gracodigo,secodigo,granombre,gradescripcion)
      values('$codgrado','$seccion','$nombre','$descripcion')";
//ejecutamos el $sql
mysql_query($sql, $con) or die ("falla registro");

header("Location:notagrado.php?correcto=si");
?>
