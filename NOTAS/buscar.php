<?php
include 'conexion.php';
//realizamos la consulta para mostrar los datos de la tabla pelicula
$sql="select m.nmatricula,m.mturno,m.mfecha,m.pagomat,a.alunombre,a.alupaterno,a.alumaterno,g.granombre,s.senombre from matricula as m,grado as g, seccion as s,alumno as a where s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo";
//ejecutamos el $sql y la vez lo recogemos el resultado en la variable $rs
$rs=mysql_query($sql, $con);
?>
<html> 
<head> 
<title>Buscador simple en PHP</title> 
</head> 
<body> 
<form action="buscar.php" method="post"> 
Buscar: <input name="palabra"> 
<input type="submit" name="buscador" value="Buscar"> 
</form> 
<div align="left"> 
  <? 
if ($_POST['buscador']) 
{ 
// Tomamos el valor ingresado 
$buscar = $_POST['palabra']; 

// Si está vacío, lo informamos, sino realizamos la búsqueda 
if(empty($buscar)) 
{ 
echo "No se ha ingresado una cadena a buscar"; 
}else{ 


// Conexión a la base de datos y seleccion de registros 
$con=mysql_connect("localhost","root","root"); 
$sql = "select m.nmatricula,m.mturno,a.alunombre,a.alupaterno,a.alumaterno,g.granombre,s.senombre from matricula as m,grado as g, seccion as s,alumno as a where s.secodigo=g.secodigo and g.gracodigo=m.gracodigo and a.alucodigo=m.alucodigo and a.alunombre like '%$buscar' ORDER BY nmatricula DESC"; 
/*
$sql = "SELECT * FROM alumno WHERE aludni like '%$buscar' ORDER BY alucodigo DESC"; */
mysql_select_db("notas", $con); 



$result = mysql_query($sql, $con); 


// Tomamos el total de los resultados 
$total = mysql_num_rows($result); 

// Imprimimos los resultados 
if ($row = mysql_fetch_array($result)){ 
echo "Resultados para: <b>$buscar</b>"; 
do { 
?> 
   <form name="form1" method="post" action="">
   
  <table width="729" border="1"> 
    <tr> 
      <td width="30" height="26">Nmatricula</td> 
      <td width="184">nombre</td> 
      <td width="121">paterno</td> 
      <td width="61">materno</td> 
      <td width="67">grado</td> 
      <td width="65">secccion</td> 
      <td width="59">turno</td>  
      <td width="59">accion</td>  
    </tr> 
    <tr> 
      <td><input type="text" value="<?=$row['nmatricula'];?>" size="1" name="textfield" id="textfield"></td>
      <td>
        <input type="text" value="<?=$row['alunombre'];?>" size="12" name="textfield" id="textfield"></td> 
      <td>
        <input type="text" value="<?=$row['alupaterno'];?>" size="7" name="textfield2" id="textfield2"></td> 
      <td>
        <input type="text" value="<?=$row['alumaterno'];?>" size="7" name="textfield3" id="textfield3"></td> 
      <td>
        <input type="text" value="<?=$row['granombre'];?>" size="7" name="textfield4" id="textfield4"></td> 
      <td>
        <input type="text" value="<?=$row['senombre'];?>" name="textfield5" id="textfield5"></td> 
      <td>
        <input type="text" value="<?=$row['mturno'];?>" size="8" name="textfield6" id="textfield6"></td> 
      
      <td>ACEPTAR</td> 
      
    </tr> 
  </table> 
  </form>
</div> 
<p>&nbsp;</p> 








<p>
  <? 
} while ($row = mysql_fetch_array($result)); 
echo "<p>Resultados: $total</p>"; 
} else { 


// En caso de no encontrar resultados 
echo "No se encontraron resultados para: <b>$buscar</b>"; 
} 
} 
} 
?>
<table width="628" border="1" bordercolor="#D9DAD5" align="left">
                    <tr>
                      
                      <td width="24" bgcolor="#FF9900">N mat</td>
                       <td width="102" bgcolor="#FF9900">Alumno</td>
                      <td width="94" bgcolor="#FF9900">Apellidos</td>
                      <td width="38" bgcolor="#FF9900">Grado</td>
                      <td width="27" bgcolor="#FF9900">Sec</td>
                      <td width="35" bgcolor="#FF9900">Turno</td>
                      <td width="64" bgcolor="#FF9900">Fcha Mt</td>
                      <td width="49" bgcolor="#FF9900">Pago Mt</td>
                      <td width="69" bgcolor="#FF9900">Accion</td>
                    </tr>
                    <?php
while ($fila=mysql_fetch_array($rs)){?>
                    <tr>
                    
    				<td><?php echo $fila['nmatricula']  ?></td>
   				 	<td align="left"><?php echo $fila['alunombre']  ?></td>
    				<td align="left"><?php echo $fila['alupaterno']  ?>-<?php echo $fila['alumaterno']  ?></td>
    				<td><?php echo $fila['granombre']  ?></td>
    				<td><?php echo $fila['senombre']  ?></td>
    				<td><?php echo $fila['mturno']  ?></td>
                    <td><?php echo $fila['mfecha']  ?></td>
    				<td>S/.<?php echo $fila['pagomat']  ?>.00</td>
    				<td align="center" bgcolor="#66FFCC"><a href="modificaalumno.php?codigoalumno=<?php echo $fila[0]  ?>"><img src="images/modificar.gif" border="1" width="32" height="21" /></a><a href="eliminarmatricula.php?nummatricula=<?php echo $fila['nmatricula']  ?>"><img src="images/eliminar.gif" width="32" border="1" height="21" /></a></td>
                    </tr><?php } ?>
                    <tr>
                      <td colspan="10"><marquee>Formulario de lista de alumnos matriculados</marquee></td>
                    </tr>
                    
                  </table>
