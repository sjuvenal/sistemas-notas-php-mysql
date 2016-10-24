<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="select* from nota";

////
//////recibimos los datos del formulario, de la pagina datosPelicula.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:

$codal=$_POST['codal'];
$asig=$_POST['curso'];
$I=$_POST['primera'];
$II=$_POST['segunda'];
$III=$_POST['tercera'];


$alumno=array();
foreach ($codal as $alu){
	$alumno[]=$alu;
	}
	
	$primera=array();
foreach ($I as $prime){
	$primera[]=$prime;
	}
	
	$segunda=array();
foreach ($II as $segu){
	$segunda[]=$segu;
	}
	
	$tercera=array();
foreach ($III as $terce){
	$tercera[]=$terce;
	}
	$can=count($codal);
	
	for($i=0;$i<$can;$i++){
		
		$promedio=(($primera[$i]+$segunda[$i]+$tercera[$i])/3);
		

		//echo $asig.$codal;
//echo $codal[$i].$primera[$i]."<br>";
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sql="update  nota set nota1='$I[$i]',nota2='$II[$i]',nota3='$III[$i]',nopromedio=$promedio
where curcodigo=$asig and nmatricula=$codal[$i] ";
	


//ejecutamos el $sql
mysql_query($sql, $con) or die("no se realizo la consulta".mysql_errno());
	}
	
	//echo $asig.$codal;
include 'buscarcurso.php';
?>