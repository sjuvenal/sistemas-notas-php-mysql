<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(nmatricula),0)+1 from matricula";
$rs=mysql_query($sql,$con);
$nummatricula=mysql_result($rs,0,0);
////
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$alumno=$_POST['alumno'];
$grado=$_POST['grado'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$turno=$_POST['turno'];
$periodo=$_POST['periodo'];
$pago=$_POST['pago'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into matricula (nmatricula,alucodigo,gracodigo,mfecha,mhora,mturno,mperiodo,pagomat)
      values('$nummatricula','$alumno','$grado','$fecha','$hora','$turno','$periodo','$pago')";
//ejecutamos el $sql

mysql_query($sql, $con) or die ("falla registro");

header("Location:notamatricula.php?correcto=si");
?>
