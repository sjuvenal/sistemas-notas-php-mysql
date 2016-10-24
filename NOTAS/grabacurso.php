<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(curcodigo),0)+1 from curso";
$rs=mysql_query($sql,$con);
$codcurso=mysql_result($rs,0,0);
////
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$docente=$_POST['docente'];
$descripcion=$_POST['descripcion'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into curso (curcodigo,docodigo,curnombre,curdescripcion)
      values('$codcurso','$docente','$nombre','$descripcion')";
//ejecutamos el $sql
mysql_query($sql, $con) or die ("falla registro");

header("Location:notacurso.php?correcto=si");
?>
