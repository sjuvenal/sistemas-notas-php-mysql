<?php
include 'conexion.php';

$usuario=$_POST['usuario'];
$tipo=$_POST['tipo'];
$clave=$_POST['clave'];

$sql="select * from usuario where ususuario='$usuario' and ustipo='$tipo' and usclave='$clave'";

$rs=  mysql_query($sql,$con);
$fila=mysql_num_rows($rs);
if ($fila>0){
	//if ($tipo=)
    header("Location:pantADM.html");
}else{
    header("Location:index.html");
}




?>
