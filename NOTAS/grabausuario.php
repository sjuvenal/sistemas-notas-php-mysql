<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(uscodigo),0)+1 from usuario";
$rs=mysql_query($sql,$con);
$codusuario=mysql_result($rs,0,0);
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$tipo=$_POST['tipo'];
$clave=$_POST['clave'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into usuario (uscodigo,usnombre,usapellidos,ususuario,ustipo,usclave)values('$codusuario','$nombre','$apellidos','$usuario','$tipo','$clave')";
//ejecutamos el $sql

mysql_query($sql, $con) or die("falla registro de docente");

header("Location:notausuario.html")
?>
