<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(secodigo),0)+1 from seccion";
$rs=mysql_query($sql,$con);
$codseccion=mysql_result($rs,0,0);
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into seccion (secodigo,senombre,sedescripcion)
      values('$codseccion','$nombre','$descripcion')";
//ejecutamos el $sql
mysql_query($sql, $con) or die("falla registro de seccion");
header("Location:notaseccion.html?correcto=si");
?>
