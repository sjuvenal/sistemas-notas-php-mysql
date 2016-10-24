<?
session_start();
?>
<?php
include 'conexion.php';

$usuario=$_POST['usuario'];
$tipo=$_POST['tipo'];
$clave=$_POST['clave'];

$sql="select * from usuario where ususuario='$usuario' and ustipo='$tipo' and usclave='$clave'";

$rs=  mysql_query($sql,$con);
$row=mysql_fetch_array($rs);
$fila=mysql_num_rows($rs);
if ($fila>0){
	if ($tipo=="alumno"){
		
		$_SESSION["dni"]=$row['ususuario'];
		$_SESSION["datos"]=$row[1]." ".$row[2];
		//echo $nombre;
		//$_SESSION["usuario"]=$fila['ususuario'];
		
		header("Location:reportesnotaalumno.php"); 
		
		
		//sacando codigo de usuario
		//$codigodocente=$_REQUEST['codigodocente'];
		//realizamos la consulta en la tabla pelicula
		//$sql="select * from docente where docodigo=$codigodocente";
		//$rs=  mysql_query($sql,$con);
		//$fila=  mysql_fetch_array($rs);
		
	}else
   		 header("Location:pantADM.html");
}else{
    header("Location:index.html");
}




?>
