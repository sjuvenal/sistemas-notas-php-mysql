<?
include "conexion.php";

$codigoseccion=$_POST['codigoseccion'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$sql="update seccion set senombre='$nombre',sedescripcion='$descripcion' where secodigo='$codigoseccion'";
mysql_query($sql,$con)or die("falla coneccion");
header("location:listarseccion.php");
?>