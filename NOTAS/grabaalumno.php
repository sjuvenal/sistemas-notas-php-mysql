<?php
include 'conexion.php';
//con esto generamos el codigo de la pelicula
$sql="SELECT IFNULL(MAX(alucodigo),0)+1 from alumno";
$rs=mysql_query($sql,$con);
$codalumno=mysql_result($rs,0,0);
//ejecuto la lave del alumno al momento que registro el alumno
$sql="SELECT IFNULL(MAX(aluclave),0)+1 from alumno";
$rs=mysql_query($sql,$con);
$clave=mysql_result($rs,00,00);
//se registra un nuevo usuarioa al moento de regsstrar un alumno
$sql="SELECT IFNULL(MAX(uscodigo),0)+1 from usuario";
$rs=mysql_query($sql,$con);
$codusuario=mysql_result($rs,0,0);
//////recibimos los datos del formulario, de la pagina datos alumno.php
//////se acuerda que en dicha pagina tiene los campos de titulo, precio, stock y los demas pues
//////eso lo recogemos de la siguiente manera:
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];
$fecnac=$_POST['fecnac'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

//registro datos del usuario como alumno
$tipo="alumno";

//$nombreU=$_POST['nombre'];
$apellidop=$_POST['paterno'];
$apellidom=$_POST['materno'];
$apellidosU=$apellidop." ".$apellidom;
//$usuarioU=$_POST['dni'];
//$tipoU=$_POST['tipoUSER'];
//$claveU=$_POST['clave'];
//////terminando de recoger los datos, pasamos a realizar al registro de
//////dichos datos a la tabla pelicula
$sqlA="insert into alumno (alucodigo,alunombre,alupaterno,alumaterno,alusexo,aludireccion,alutelefono,alufechanac,aluclave,aludni)
      values('$codalumno','$nombre','$paterno','$materno','$sexo','$direccion','$telefono','$fecnac','$clave','$dni')";
//ejecutamos el $sql
$sqlU="insert into usuario (uscodigo,usnombre,usapellidos,ususuario,ustipo,usclave)values('$codusuario','$nombre','$apellidosU','$dni','$tipo','$clave')";

mysql_query($sqlA, $con) or die("falla registro de alumno");
mysql_query($sqlU, $con) or die("falla registro de alumno");
header("Location:notaalumno.html?correcto=si");
?>
