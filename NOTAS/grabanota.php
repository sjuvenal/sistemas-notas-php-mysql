<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(nocodigo),0)+1 from nota";
$rs=mysql_query($sql,$con);
$codnota=mysql_result($rs,0,0);
////
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$matricula=$_POST['matricula'];
$curso=$_POST['curso'];
$fecha=$_POST['curso'];
$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];
//sacando el promedio de notas
$promedio=($nota1+$nota2+$nota3)/3;
//codicion del de la nota
if ($promedio >= 10.5){
	$condicion="Aprobado";
}else
	$condicion="Desaprobado";

//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="insert into nota (nocodigo,nmatricula,curcodigo,nota1,nota2,nota3,nopromedio,nocondicion)    values('$codnota','$matricula','$curso','$nota1','$nota2','$nota3','$promedio','$condicion')";
//ejecutamos el $sql
mysql_query($sql, $con) or die ("falla registro");

header("Location:notas.php?correcto=si");
?>