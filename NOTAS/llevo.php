<?
session_start();
?>
<?
include 'conexion.php';
$codigoalumno=$_REQUEST['codigoalumno'];

//$nombre=$_REQUEST['nombre'];
$sql="select * from alumno where alucodigo=$codigoalumno";
?>

<?
$codigo=$_SESSION["codigoalumno"];
$nombres=$_SESSION["nombre"];
$paterno=$_SESSION["appaterno"];
$materno=$_SESSION["apmaterno"];
session_destroy();
se
?>
<?php
include 'conexion.php';
//realizamos la consulta para mostrar los datos de la tabla pelicula
//$clave=$_REQUEST['clave'];
$sql="select n.nocodigo,n.nota1,n.nota2,n.nota3,n.nopromedio,n.nocondicion,m.mturno,a.alunombre,a.alupaterno,a.aluclave,a.aludni,a.alumaterno,g.granombre,s.senombre,c.curnombre from matricula as m,grado as g, seccion as s,alumno as a,curso as c,nota as n where c.curcodigo=n.curcodigo and m.nmatricula=n.nmatricula and s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo and a.aludni='87654321' ";
//ejecutamos el $sql y la vez lo recogemos el resultado en la variable $rs  like '%$buscar' ORDER BY nocodigo DESC
$rs=mysql_query($sql, $con);
$nombre=$_POST['alunombre'];
$apellido=$_POST['alupaterno'];
$nombres=$nombre." ".$apellidos;
echo $nombres;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<table width="200" border="1">
  <tr>
    <td>CODIGO</td>
    <td>
      
      <input type="text" name="textfield" value="<?=$codigo;?>" id="textfield" />
    </td>
  </tr>
  <tr>
    <td>NOMBRE</td>
    <td><input type="text" name="textfield2" value="<?=$nombres;?>" id="textfield2" /></td>
  </tr>
  <tr>
    <td>PATERNO</td>
    <td><input type="text" name="textfield3" value="<?=$paterno;?>" id="textfield3" /></td>
  </tr>
  <tr>
    <td>MATERNO</td>
    <td><input type="text" name="textfield4" value="<?=$materno;?>" id="textfield4" /></td>
  </tr>
</table>
</form>
<table width="565" border="1" bordercolor="#99FF00"> 
    <tr>
      <td height="26" bgcolor="#99FF00">ALUMNO:</td>
      <td colspan="4" bgcolor="#99FF00"><input type="text" value="<?=$row['alunombre'];?><? echo " - "?><?=$row['alupaterno'];?><? echo " - "?><?=$row['alumaterno'];?>" size="30" name="codmatricula2" id="codmatricula2" /></td>
      <td bgcolor="#99FF00">&nbsp;</td>
      <td align="center" bgcolor="#99FF00">&nbsp;</td>
    </tr>
    <tr>
      <td height="26" align="right" bgcolor="#99FF00">GRADO:</td>
      <td colspan="3" bgcolor="#99FF00"><input type="text" value="<?php echo $grado?>" size="15" name="codmatricula3" id="codmatricula3" /></td>
      <td bgcolor="#99FF00">SECCION:</td>
      <td bgcolor="#99FF00"><input type="text" value="<?=$row['senombre'];?>" size="3" name="codmatricula4" id="codmatricula4" /></td>
      <td align="center" bgcolor="#99FF00">&nbsp;</td>
    </tr>
    <tr> 
      <td width="143" height="26" bgcolor="#99FF00">CURSO</td> 
      <td width="49" bgcolor="#99FF00">NOTA 01</td> 
      <td width="47" bgcolor="#99FF00">NOTA 02</td> 
      <td width="52" bgcolor="#99FF00">NOTA 03</td> 
      <td width="60" bgcolor="#99FF00">PROMEDIO</td> 
 
   
      <td width="83" bgcolor="#99FF00">CONDICION</td> 

      <td width="85" align="center" bgcolor="#99FF00">ACCION</td>  
    </tr> 
    <?php
while ($fila=mysql_fetch_array($rs)){?>
    <tr> 
      <td><input type="text" value="<?php echo $fila['curnombre']  ?>" size="15" name="codmatricula" id="codmatricula"></td>
      <td>
        <input type="text" value="<?php echo $fila['nota1']  ?>" size="6" name="nombre" id="nombre"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nota2']  ?>" size="6" name="paterno" id="paterno"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nota3']  ?>" size="6" name="materno" id="materno"></td> 
      <td>
        <input type="text" value="<?php echo $fila['nopromedio']  ?>" size="7" name="textfield4" id="textfield4"></td> 
      
      
      <td>
        <input type="text" value="<?php echo $fila['nocondicion']  ?>" size="6" name="textfield7" id="textfield7"></td>
       <td><a href="notas.php?codmatricula=<?=$row['nmatricula'];?>">ACEPTAR</a></td> 
      
    </tr> <?php } ?>
  </table> 
</body>
</html>