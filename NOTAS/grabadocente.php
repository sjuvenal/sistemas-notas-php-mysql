<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(docodigo),0)+1 from docente";
$rs=mysql_query($sql,$con);
$coddocente=mysql_result($rs,0,0);
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into docente (docodigo,donombre,doapellidos,dosexo,dodni,dodireccion,dotelefono)values('$coddocente','$nombre','$apellidos','$sexo','$dni','$direccion','$telefono')";
//ejecutamos el $sql

mysql_query($sql, $con) or die("falla registro de docente");

header("Location:notadocente.html")
?>
